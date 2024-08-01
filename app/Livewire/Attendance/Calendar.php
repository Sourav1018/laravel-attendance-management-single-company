<?php

namespace App\Livewire\Attendance;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    public $daysInMonth;
    public $attendanceRecords;

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;
        $this->daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth)->daysInMonth;
    }

    public function previousMonth()
{
    $this->currentMonth--;
    if ($this->currentMonth < 1) {
        $this->currentMonth = 12;
        $this->currentYear--;
    }
    $this->daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth)->daysInMonth;
}

public function nextMonth()
{
    $this->currentMonth++;
    if ($this->currentMonth > 12) {
        $this->currentMonth = 1;
        $this->currentYear++;
    }
    $this->daysInMonth = Carbon::createFromDate($this->currentYear, $this->currentMonth)->daysInMonth;
}
    public function render()
    {
        return view('livewire.attendance.calendar');
    }
}
