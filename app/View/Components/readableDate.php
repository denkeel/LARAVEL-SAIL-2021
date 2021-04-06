<?php

namespace App\View\Components;

use DateTime;
use Illuminate\View\Component;
use NumberFormatter;

class readableDate extends Component
{
    public $parsedDate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $dateIso8601)
    {
        $this->parsedDate = $this->parse($dateIso8601);
        //dd($this->parsedDate);
    }

    private function parse($dateIso8601)
    {
        $date = DateTime::createFromFormat(DateTime::ISO8601, $dateIso8601);
        
        $month = $date->format('F');
        $day = $date->format('j'); //25
        $day = (new NumberFormatter('en_US', NumberFormatter::ORDINAL))->format($day); //25th
        $year = $date->format('Y');

        return "$month $day, $year"; //April 25th, 2020
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.readable-date');
    }
}
