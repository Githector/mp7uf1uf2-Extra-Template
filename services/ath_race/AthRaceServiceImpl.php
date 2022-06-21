<?php
require_once "../services/Conex.php";
require_once "IAthRaceService.php";
require_once "../model/AthRace.php";




class AthRaceServiceImpl implements IAthRaceService
{


    public function deleteAllAthRaces(): array
    {
        $sql = "DELETE FROM ath_race";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function dropTableAthRace(){
        $sql = "DROP table ath_race";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }

    public function createTableAthRace(){
        $sql = "CREATE TABLE `daw_db`.`ath_race` (`id_ath_race` INT NOT NULL AUTO_INCREMENT , `id_race` INT NOT NULL , `id_athlete` INT NOT NULL , PRIMARY KEY (`id_ath_race`)) ENGINE = InnoDB;";
        $con = new Conex();
        return $con->selectAll($sql,null);
    }
}