<?php
include_once '../model/Race.php';
include_once '../services/race/RaceServiceImpl.php'; //Només per Bases de dades!!
if(!isset($_SESSION)){
    session_start();
}

//Primer comprova si hi ha al camp buit, si és així torna a la pàgina mostrant el missatge flash
//Si el form està ok afegeix la cursa o a la var de sessió o a la base de dades (Depèn de la UF)
//Un cop afegit fa redirecció al controller listRacesController.php que prepara la vista per mostrar totes les curses