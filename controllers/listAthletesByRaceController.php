<?php
include_once '../model/Athlete.php';
include_once '../model/Race.php';
include_once '../services/race/RaceServiceImpl.php';//BBDD
include_once '../services/athlete/AthleteServiceImpl.php';//BBDD
include_once '../services/ath_race/AthRaceServiceImpl.php';//BBDD

if (!isset($_SESSION)) {
    session_start();
}

//Aquest controller es cuida de preparar tots els atletes d'una cursa determinada

?>