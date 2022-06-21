<?php
include_once '../model/Athlete.php';
include_once '../model/Race.php';
include_once '../model/AthRace.php';
include_once '../services/race/RaceServiceImpl.php';
include_once '../services/athlete/AthleteServiceImpl.php';
include_once '../services/ath_race/AthRaceServiceImpl.php';

if (!isset($_SESSION)) {
    session_start();
}



//Aquest controller serveix per, a través de l'id de cursa i d'atleta, poder establir la relació entre els dos.
?>

