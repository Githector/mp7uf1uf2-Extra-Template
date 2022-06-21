<?php
include_once '../model/Race.php';
include_once '../services/race/RaceServiceImpl.php';
if(!isset($_SESSION)){
    session_start();
}

//Prepara llistat de totes les curses per mostrar-les a la vista que toca