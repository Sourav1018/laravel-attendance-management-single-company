<?php

namespace App\Livewire\Attendance;

use Livewire\Component;
use Illuminate\Support\Carbon;

class Timer extends Component
{
    public $startTime;
    public $currentTime;
    public $isRunning = false;

    public function mount()
    {
        $this->currentTime = Carbon::now();
    }

    public function startTimer()
    {
        $this->startTime = Carbon::now();
        $this->isRunning = true;
        $this->updateTime();
    }

    public function stopTimer()
    {
        $this->isRunning = false;
    }

    public function updateTime()
    {
        if ($this->isRunning) {
            $this->currentTime = Carbon::now();
            $this->dispatchBrowserEvent('update-time');
        }
    }
    public function render()
    {
        return view('livewire.attendance.timer');
    }
}
