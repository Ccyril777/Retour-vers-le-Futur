<?php
class TimeTravel
{
  private $start;
  private $end;
  public function __construct($startDateSentByUser)
  {
    $this->start = $startDateSentByUser; 
  }
  public function getTravelInfo()
  {
    $intervalBetweenEndAndStart = $this->start->diff($this->end);
    $result = $intervalBetweenEndAndStart->format('Il y a %y année(s), %m mois, %d jour(s), %h heure(s), %i minute(s) et %s seconde(s).');
    return $result;
  }
  public function findDate($intervalSentByUser)
  {
    $result = $this->start->sub($intervalSentByUser);
    $this->end = $result;
    return $result;
  }
  public function backToFutureStepByStep($datePeriod) 
  {
    $result = [];
    foreach($datePeriod as $date) 
    {
      $result[] = $date->format('M d Y A h:i');
    }
    return $result;
  }
}
