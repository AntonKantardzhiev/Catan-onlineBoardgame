<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body >
<div class="hexagonGrid">
    <div class="firstRow">
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
    </div>

    <div class="secondRow">
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
    </div>
    <div class="thirdRow">
        <div class="hex hills"></div>
        <div class="hex hills"></div>
        <div class="hex hills"></div>
        <div class="hex hills"></div>
        <div class="hex hills"></div>
        <div class="hex hills"></div>
        <div class="hex hills"></div>
    </div>
    <div class="fourthRow">
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
        <div class="hex grassland"></div>
    </div>
    <div class="fifthRow">
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
        <div class="hex miningField"></div>
    </div>
    <div class="sixthRow">
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
        <div class="hex field"></div>
    </div>
    <div class="seventhRow">
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
        <div class="hex forest"></div>
    </div>

</div>
<div>
    <div>@foreach($tiles as $tile)
        {{$tile->getX() , $tile->getY()}}
        @endforeach</div>
    copyright CATAN BOARDGAME
</div>

<script src="/js/game.js"></script>
</body>
</html>
