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
    public $openSubmenus = [];

    public function mount()
    {
        $this->routes = [
            [
                'name' => 'Dashboard',
                'route' => route('dashboard'),
                'icon' => 'mdi mdi-view-dashboard-outline',
                'active' => request()->routeIs('dashboard'),
                'submenus' => [
                    [
                        'name' => 'some title',
                        'route' => '#some-routes-1',
                        'active' =>'',
                    ],
                    [
                        'name' => 'some title',
                        'route' => '#some-routes-2',
                        'active' =>'',
                    ],
                ],
            ],
            [
                'name' => 'Attendance',
                'route' => route('attendance'),
                'icon' => 'mdi mdi-calendar-clock',
                'active' => request()->routeIs('attendance'),
                'submenus' => [
                    [
                        'name' => 'some title',
                        'route' => '#some-attendance-route-1',
                        'active' => '',
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
