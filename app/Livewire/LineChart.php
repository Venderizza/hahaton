<?php

namespace App\Livewire;

use Livewire\Component;

class LineChart extends Component
{


    public $dateRange ='month';

    public function render()
    {
        return view('livewire.line-chart',[
            "dates" => $this->getDateRange(),
        ]);
    }


    public function getDateRange() {
        $dates = [];
        $startDate = now();

        switch ($this->dateRange) {
            case 'month':
                $daysInMonth = $startDate->daysInMonth; // Количество дней в текущем месяце
                for ($day = 1; $day <= $daysInMonth; $day++) {
                    $dates[] = $startDate->copy()->day($day)->format('d M');
                }
                break;

            case 'quarter':
                $quarterStart = $startDate->copy()->startOfQuarter();
                $quarterEnd = $startDate->copy()->endOfQuarter();
                for ($date = $quarterStart; $date->lessThanOrEqualTo($quarterEnd); $date->addDay()) {
                    $dates[] = $date->format('d M');
                }
                break;

            case 'year':
                $yearStart = $startDate->copy()->startOfYear();
                $yearEnd = $startDate->copy()->endOfYear();
                for ($date = $yearStart; $date->lessThanOrEqualTo($yearEnd); $date->addDay()) {
                    $dates[] = $date->format('d M');
                }
                break;
        }

        return $dates;
    }

    public function setDataRange($value)
    {
        $this->dateRange = $value;


    }


}
