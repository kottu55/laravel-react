<?php
namespace App\Calendar;
use Carbon\Carbon;

class CalendarWeek {
    protected $carbon;
    protected $index = 0;

    function __construct($date, $index = 0){
        $this->carbon = new Carbon($date);
        $this->index = $index;
    }

    function getClassName(){
        return "week-" . $this->index;
    }

    function getDays(){
        $days = [];

        $startDay = $this->carbon->copy()->startOfweek();
        $lastDay = $this->carbon->copy()->endOfWeek();

        $tmpDay = $startDay->copy();

        while($tmpDay->lte($lastDay)){

            if($tmpDay->month != $this->carbon->month){
                $day = new CalendarWeekBlankDay($tmpDay->copy());
                $days[] = $day;
                $tmpDay->addDay(1);
                continue;
            }

            $day = new CalendarWeekday($tmpDay->copy());
            $days[] = $day;
            $tmpDay->addDay(1);
        }

        return $days;
    }

}

