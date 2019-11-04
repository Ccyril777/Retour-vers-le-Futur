<?php 

class timeTravel
{
    private $star;
    private $end;

    public function __construct(DateTime $startDate, DateTime $endDate)
    {
        $this->start = $startDate;
        $this->end = $endDate;
    }

    public function getTravelInfo() :string
    {
        $differences = $this->start->diff($this->end);
        return $differences->format ('Il y a exactement %Y années, %m mois, %d jours, %H heures, et %s secondes entres le 1985-12-31 et le ');
    }

    public function finDate(int $interval): DateTime
    {
        $timeInterval = new DateInterval ('PT' . $interval . 'S');
        return $this->start->sub($timeInterval);
    }

    public function retourVersleFutur($step) : array
    {
        $result = [];
        $periods = new DatePeriod($this->start, $step, $this->end);
        foreach ($periods as $date)
        {
            $result[] = $date->format('M,d,Y,A,H');
        }

        return $result;
    }
}