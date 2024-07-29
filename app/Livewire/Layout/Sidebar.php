<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\Session;
use Livewire\Component;

class Sidebar extends Component
{
    #[Session('toggelFlag')]
    public $toggelFlag;

    public function toggelSidebar(){
        $this->toggelFlag = !$this->toggelFlag;
    }
    public function render()
    {
        return view('livewire.layout.sidebar');
    }
}
