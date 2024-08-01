<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\Session;
use Livewire\Component;

class Sidebar extends Component
{
    #[Session('toggelFlag')]
    public $toggelFlag;

    public $routes = [];

    #[Session('openSubmenus')]
    public $openSubmenus;

    public function mount()
    {
        $this->routes = [
            [
                'name' => 'Dashboard',
                'route' => route('dashboard'),
                'icon' => 'mdi mdi-view-dashboard-outline',
                'active' => request()->routeIs('dashboard'),
                'submenus' => [],
            ],
            [
                'name' => 'Attendance',
                'route' => '',
                'icon' => 'mdi mdi-calendar-clock',
                'active' => '',
                'submenus' => [
                    [
                        'name' => 'Check In and Out',
                        'route' => route('attendance'),
                        'active' => request()->routeIs('attendance'),
                    ],
                    [
                        'name' => 'some title',
                        'route' => '#some-attendance-route-2',
                        'active' => '',
                    ],
                ],
            ],

        ];

        if (is_null($this->openSubmenus)) {
            $this->openSubmenus = array_fill(0, count($this->routes), false);
        }
    }

    public function toggelSidebar()
    {
        $this->toggelFlag = !$this->toggelFlag;
    }

    public function toggelSubmenu($index){
        foreach ($this->openSubmenus as $i => $isOpen) {
            if ($i != $index) {
                $this->openSubmenus[$i] = false;
            }
        }
        $this->openSubmenus[$index] = !$this->openSubmenus[$index];
    }
    public function render()
    {
        return view('livewire.layout.sidebar');
    }
}
