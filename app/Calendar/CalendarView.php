<?php
namespace App\Calendar;

use Carbon\Carbon;

class CalendarView{

    private $carbon;
    function __construct($date){
        $this->carbon = new Carbon($date);
    }


    public function getTitle(){
        return $this->carbon->format('Y年n月');
    }

    function render(){
        $html = [];
        $html[] = '<div class="calendar">';
        $html[] = '<table class="table">';
        $html[] = '<thead>';
        $html[] = '<tr>';
        $html[] = '<th>月</th>';
        $html[] = '<th>火</th>';
        $html[] = '<th>水</th>';
        $html[] = '<th>木</th>';
        $html[] = '<th>金</th>';
        $html[] = '<th>土</th>';
        $html[] = '<th>日</th>';
        $html[] = '</tr>';
        $html[] = '</thead>';
        $html[] = '</table>';
        $html[] = '</div>';
        return implode("", $html);
    }

    protected function getWeeks(){
        $weeks = [];
        $firstDay = $this->carbon->copy()->firstOfMonth();
        $lastDay = $this->carbon->copy()->lastOfMonth();
        $week = new CalendarWeek($firstDay->copy());
        $weeks[] = $week;

        $tmpDay = $firstDay->copy()->addDay(7)->startOfWeek();

        while($tmpDay->lte($lastDay)){
            $week = new CalendarWeek($tmpDay, count($weeks));
            $weels[] = $week;

            $tmpDay->addDay(7);
        }
        return $week;
    }
}

?>
