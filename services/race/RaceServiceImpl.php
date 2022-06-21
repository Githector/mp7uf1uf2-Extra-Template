<?php
require_once "../services/Conex.php";
require_once "IRaceService.php";
require_once "../model/Race.php";




class RaceServiceImpl implements IRaceService
{


    public function deleteAllRaces(): array
    {
        $sql = "DELETE FROM races";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function dropTableRaces(){
        $sql = "DROP table races";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function createTableRaces(){
        $sql = "CREATE TABLE `daw_db`.`races` (`id_race` INT NOT NULL AUTO_INCREMENT , `location` VARCHAR(100) NOT NULL , `distance` FLOAT(10) NOT NULL , `date` DATE NOT NULL , `type` VARCHAR(100) NOT NULL , PRIMARY KEY (`id_race`)) ENGINE = InnoDB;";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }
}