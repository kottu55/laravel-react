<?php

namespace App\Calendar;

use Carbon\Carbon;

use function PHPUnit\Framework\lessThanOrEqual;

class CalendarWeekDay
{
    protected $carbon;

    function __construct($date)
    {
        $this->carbon = new Carbon($date);
    }

    function getClassName()
    {
        if ($this->carbon->isToday()){
            return "day-" . strtolower($this->carbon->format("D")) . " day-today";
        } else {
            return "day-" . strtolower($this->carbon->format("D"));
        }

    }

    /**
     * @return
     */
    function render()
    {
        return '<p class="day">' . $this->carbon->format("j") . '</p>';
    }
}
