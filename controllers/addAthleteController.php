<?php
include_once '../model/Athlete.php';
include_once '../services/athlete/AthleteServiceImpl.php'; //Base de dades!!!
if(!isset($_SESSION)){
    session_start();
}

//Primer comprova si hi ha al camp buit, si és així torna a la pàgina mostrant el missatge flash
//Si el form està ok afegeix l'atleta o a la var de sessió o a la base de dades (Depèn de la UF)
//Un cop afegit fa redirecció al controller listAthletesController.php que prepara la vista per mostrar tots els ateletes

