/******/
(() => { // webpackBootstrap
    /******/
    "use strict";
    /******/
    /******/
    /******/
})()
;
require('./bootstrap');

const messages_el = document.getElementById("messages");
const uname = document.getElementById("uname");
const message_in = document.getElementById("message_in");
const msg_form = document.getElementById("msg_form");


msg_form.addEventListener('submit', function (e) {
    e.preventDefault();

    let has_errors = false;

    if (uname.value === '') {
        alert('enter a username');
        has_errors = true;
    }
    if (message_in.value === '') {
        alert('enter a msg');
        has_errors = true;
    }
    if (has_errors) {
        return;
    }
    const options = {
        method: 'post',
        url: '/send-message',
        data: {
            username: uname.value,
            message: message_in.value
        }
    }

    axios(options)
});

window.Echo.channel('Lobby')
    .listen('.chatmsg', (data) => {
        console.log(data);
        messages_el.innerHTML += data.username + " " + data.msg;
    });


let sidebarToggle = false;

let sidebarMenu = document.getElementById('sidebar');
let popupMenuButton = document.getElementById('menuPopup');

let enterPlayerName = document.getElementById('enter');
let form = document.querySelector('form');

let playerNames = document.querySelector('.playerdetails');

let avatar = document.querySelector('.avatar')

let startGame = document.getElementById('start');
let lobby = document.querySelector('.lobby');
let hexagons = document.querySelector('.hexagonGrid');
// let hex = document.querySelector('.hex');


popupMenuButton.addEventListener('click', () => {
    if (sidebarToggle === false) {
        sidebarMenu.style.visibility = 'visible';
        sidebarMenu.style.width = '200px';
    } else {
        sidebarMenu.style.visibility = 'hidden';
        sidebarMenu.style.width = '-200px';
    }
});

hexagons.style.display = 'none';
avatar.style.display = 'none';

enterPlayerName.addEventListener('click', () => {
    form.classList.toggle('fade');
    avatar.style.display = 'block';
    playerNames.classList.toggle('visible');
});

startGame.addEventListener('click', () => {
    lobby.classList.toggle('fade');
    hexagons.style.display = 'flex';
    hexagons.classList.toggle('visible');
});

let diceBtn = document.getElementById("die");

diceBtn.addEventListener("submit", function (e) {
    e.preventDefault();

    const options = {
        method: 'post',
        url: '/rollDice',
        data: {
            username: uname.value,
        }
    }
    axios(options)
})

window.Echo.channel('Game')
    .listen('.roll', (data) => {
        console.log(data);
        console.log(`${data.player} rolled a ${data.roll.totalRoll} (${data.roll.firstRoll} + ${data.roll.secondRoll})`);
    });
