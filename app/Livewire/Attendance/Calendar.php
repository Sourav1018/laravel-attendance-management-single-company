<?php

namespace App\Livewire\Attendance;

use Illuminate\Support\Carbon;
use Livewire\Component;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    public $daysInMonth;
    public $attendanceRecords = [];
    public $years = [];
    public $months = [];

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;

        $this->years = range(2000, Carbon::now()->year);
        $this->months = [
            1  => 'January',
            2  => 'February',
            3  => 'March',
            4  => 'April',
            5  => 'May',
            6  => 'June',
            7  => 'July',
            8  => 'August',
            9  => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        $this->updateCalendarData();
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'currentMonth' || $propertyName === 'currentYear') {
            $this->updateCalendarData();
        }
    }

    public function updateCalendarData()
    {
        $this->daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth)->daysInMonth;
    }


    public function render()
    {
        return view('livewire.attendance.calendar');
    }
}
