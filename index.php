<?php

require_once 'date.php';

$timeTravel = new timeTravel(new DateTime('1985-12-31'), new DateTime());

    echo $timeTravel->getTravelInfo();

$date = $timeTravel->finDate(1000000000);

    echo $date->format('Y-m-d');

$results = $timeTravel->retourVersLeFutur(new DateInterval("P1M1W1D"));

    var_dump($results);