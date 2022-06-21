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
unset($_SESSION['athletes']);
unset($_SESSION['races']);
unset($_SESSION['idRace'] );
unset($_SESSION['idAthlete'] );
unset($_SESSION['list'] );

if(!isset($_SESSION['athletes'])){
    $_SESSION['athletes'] = array();
}

if(!isset($_SESSION['races'])){
    $_SESSION['races'] = array();
}

if(!isset($_SESSION['idRace'])){
    $_SESSION['idRace'] = 0;
}

if(!isset($_SESSION['idAthlete'])){
    $_SESSION['idAthlete'] = 0;
}

if(!isset($_SESSION['reults'])){
    $_SESSION['results'] = array();
}

if(!isset($_SESSION['list'])){
    $_SESSION['list'] = array();
}

$raceSevice = new RaceServiceImpl();
$athleteService = new AthleteServiceImpl();
$raceAthService = new AthRaceServiceImpl();


/*
$_SESSION['races'][] = new Race($_SESSION['idRace']++,"Ripoll",21.09,"2022-07-12","Asphalt");
$_SESSION['races'][] = new Race($_SESSION['idRace']++,"Barcelona",10,"2022-08-14","Mountain");
$_SESSION['races'][] = new Race($_SESSION['idRace']++,"Campdevànol",11,"2022-08-22","Mixed");
$_SESSION['races'][] = new Race($_SESSION['idRace']++,"Torelló",7.5,"2022-09-10","Asphalt");

$_SESSION['athletes'][] = new Athlete($_SESSION['idAthlete']++,"Christian","Stuani","1980-03-07","FC Girona");
$_SESSION['athletes'][] = new Athlete($_SESSION['idAthlete']++,"Héctor","Ortiz","1980-05-08","CA Campdevànol");
$_SESSION['athletes'][] = new Athlete($_SESSION['idAthlete']++,"Pere","Perez","1990-03-01","CA Campdevànol");
$_SESSION['athletes'][] = new Athlete($_SESSION['idAthlete']++,"Miquel","López","2001-01-02","FC Barcelona");*/




$raceSevice->dropTableRaces();
$athleteService->dropTableAthletes();
$raceAthService->dropTableAthRace();

$raceSevice->createTableRaces();
$athleteService->createTableAthletes();
$raceAthService->createTableAthRace();

$raceSevice->addRace(new Race(null,"Ripoll",21.09,"2022-07-12","Asphalt"));
$raceSevice->addRace(new Race(null,"Barcelona",10,"2022-08-14","Mountain"));
$raceSevice->addRace(new Race(null,"Campdevànol",11,"2022-08-22","Mixed"));
$raceSevice->addRace(new Race(null,"Torelló",7.5,"2022-09-10","Asphalt"));

$athleteService->addAthlete(new Athlete(null,"Christian","Stuani","1980-03-07","FC Girona"));
$athleteService->addAthlete(new Athlete(null,"Héctor","Ortiz","1980-05-08","CA Campdevànol"));
$athleteService->addAthlete(new Athlete(null,"Pere","Perez","1990-03-01","CA Campdevànol"));
$athleteService->addAthlete(new Athlete(null,"Miquel","López","2001-01-02","FC Barcelona"));

$raceAthService->addAthRace(new AthRace(null,1,1));
$raceAthService->addAthRace(new AthRace(null,1,2));
$raceAthService->addAthRace(new AthRace(null,1,3));
$raceAthService->addAthRace(new AthRace(null,2,1));
$raceAthService->addAthRace(new AthRace(null,3,3));
$raceAthService->addAthRace(new AthRace(null,4,2));
$raceAthService->addAthRace(new AthRace(null,4,3));


header("Location: ../views/index.php");

?>
