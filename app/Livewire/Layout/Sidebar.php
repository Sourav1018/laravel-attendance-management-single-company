<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\Session;
use Livewire\Component;

class Sidebar extends Component
{
    #[Session('toggelFlag')]
    public $toggelFlag;

    public $routes = [];

    public function mount()
    {
        $this->routes = [
            [
                'name' => 'Dashboard',
                'route' => route('dashboard'),
                'icon' => 'mdi mdi-view-dashboard-outline',
                'active' => request()->routeIs('dashboard'),
            ],
        ];
    }

    public function toggelSidebar(){
        $this->toggelFlag = !$this->toggelFlag;
    }
    public function render()
    {
        return view('livewire.layout.sidebar');
    }
}
