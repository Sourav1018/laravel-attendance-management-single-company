<?php

namespace App\Livewire\Layout;

use Livewire\Attributes\Session;
use Livewire\Component;

class Sidebar extends Component
{
    #[Session('toggelFlag')]
    public $toggelFlag;

    public $routes = [];
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
        foreach ($this->routes as $index => $route) {
            $this->openSubmenus[$index] = false;
        }
    }

    public function toggelSidebar()
    {
        $this->toggelFlag = !$this->toggelFlag;
    }

    public function toggelSubmenu($index){
        $this->openSubmenus[$index] = !$this->openSubmenus[$index];
    }
    public function render()
    {
        return view('livewire.layout.sidebar');
    }
}
