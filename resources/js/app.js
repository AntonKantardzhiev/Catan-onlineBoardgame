/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/
/******/
/******/ })()
;
require('./bootstrap');

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
