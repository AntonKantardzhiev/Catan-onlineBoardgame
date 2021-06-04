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
    <ul class="text-center mx-auto">
        <li class="navButton sidebarButtons">Rules</li>
    </ul>
</aside>

<div class="lobby">
    <form class="form">
        <div class="form-group">
            <label class="label" for="playerName">What's your name?</label>
            <input type="text" class="lobbyForm" placeholder="Write your playername here">
            <button id="enter" type="submit" class="btn btn-primary">Enter</button>
        </div>
    </form>
</div>


<div class="copyright mx-auto text-center">
    copyright CATAN BOARDGAME
</div>

<script src="/js/app.js"></script>
</body>
</html>
