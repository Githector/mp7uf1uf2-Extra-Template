<?php
include_once '../model/Race.php';
include_once '../services/athlete/AthleteServiceImpl.php';
if(!isset($_SESSION)){
    session_start();
}

//Prepara llistat de tots els atletes per mostrar-los a la vista que toca