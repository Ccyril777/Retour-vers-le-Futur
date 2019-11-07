<?php

    require_once 'date.php';

        $interval = new \DateInterval('PT1000000000S');
        $startDate = new \DateTimeImmutable('1985-12-31T00:00:00.00000Z');
        $timeTravel = new TimeTravel($startDate);
        $endDate = $timeTravel->findDate($interval);

            var_dump($endDate);
            var_dump($timeTravel->getTravelInfo);

        $stepByStepInterval = new \DateInterval('P1M8D');
        $stepByStepPeriod = new \DatePeriod($endDate, $stepByStepInterval, $startDate);

            var_dump($timeTravel->backToFutureStepByStep($stepByStepPeriod));