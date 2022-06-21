<?php


include_once '../model/Athlete.php';
include_once '../model/Race.php';
include_once '../fun/functions.php';

if (!isset($_SESSION)) {
    session_start();
}
//rep el patró a buscar i mira totes les propietats dels objectes buscant coincidències. Si en troba, afegeix objecte a la llista que retorna a la vista.
//Pots fer servir el métode str_contains de PHP8


?>

