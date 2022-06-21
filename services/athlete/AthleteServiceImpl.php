<?php
require_once "../services/Conex.php";
require_once "IAthleteService.php";
require_once "../model/Athlete.php";




class AthleteServiceImpl implements IAthleteService
{




    public function deleteAllAthletes(): array
    {
        $sql = "DELETE FROM athletes";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function dropTableAthletes(){
        $sql = "DROP table athletes";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function createTableAthletes(){
        $sql = "CREATE TABLE `daw_db`.`athletes` (`id_athlete` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(100) NOT NULL , `last_name` VARCHAR(100) NOT NULL , `birth_date` DATE NOT NULL , `club` VARCHAR(100) NOT NULL , PRIMARY KEY (`id_athlete`)) ENGINE = InnoDB;";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }
}