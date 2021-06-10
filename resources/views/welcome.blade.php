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

<body class="antialiased">
<nav class="navigation navbar">
    <a class="navbar-brand" href="#">
        <img src="/assets/catanLogo.png" alt="Catan logo">
    </a>
    <ul>
        <li id="menuPopup" class="navButton">MENU</li>
        <li><a class="navButton" href="#">QUIT GAME</a>
        </li>
    </ul>
</nav>

<aside id="sidebar" class="nav-sidebar">
        <a class="text-center mx-auto navButton sidebarButtons">Rules</a>
</aside>

<div class="lobby">
    <form class="form">
        <div class="form-group">
            <label class="label" for="playerName">What's your name?</label>
            <input type="text" id="uname" class="lobbyForm" placeholder="Write your playername here">
            <button id="enter" type="button" class="btn btn-primary">Enter</button>
        </div>
    </form>


    <div class="playerdetails">
        <div class="myPlayerInfo">
            <h3 id="currentPlayerName" class="currentPlayerName"></h3>
            <img class="avatar" src="/assets/avatar.png" alt="avatar">
        </div>

        <div id="otherPlayerNames" class="otherPlayers">
            <h3 class="otherPlayerName"></h3>
            <img class="avatar" src="/assets/avatar.png" alt="avatar">
        </div>
</div>
    <button id="start" type="button" class="btn-start btn-primary">Start game</button>
</div>

<div class="chat-sidebar chatbox">
    <h5>Chat here!</h5>
    <div id="messages"></div>
    <form id="msg_form">
        <textarea id="message_in" rows="6" cols="5" name="message" form="msg_form">
what's up?...</textarea>
        <button type="submit" id="message_send">Send it!</button>
    </form>
</div>

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

{{--        <div class="hex forest"></div>--}}
{{--        <div class="hex hills"></div>--}}
{{--        <div class="hex field"></div>--}}
{{--        <div class="hex miningField"></div>--}}
{{--        <div class="hex grassland"></div>--}}
{{--        <div class="hex forest"></div>--}}
{{--        <div class="hex hills"></div>--}}



{{--we can try to make ol with li instead of divs as well.--}}

<div class="copyright mx-auto text-center">
    copyright CATAN BOARDGAME
</div>

<script src="/js/app.js"></script>
</body>
</html>
