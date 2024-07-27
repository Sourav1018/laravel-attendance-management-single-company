<?php

namespace App\Livewire\Layouts;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Sidebar extends Component
{
    public $toggelSidebar;
    public $routes = [];

    public function mount()
    {
        $this->toggelSidebar = Session::get('toggelSidebar', false);
        $this->routes = [
            [
                'name' => 'Dashboard',
                'route' => route('dashboard'),
                'icon' => 'mdi mdi-view-dashboard-outline',
                'active' => request()->routeIs('dashboard'),
            ],
            [
                'name' => 'Attendance',
                'route' => route('attendance'),
                'icon' => 'mdi mdi-calendar-clock',
                'active' => request()->routeIs('attendance'),
            ],
        ];
    }

    public function toggelSidebarState()
    {
        $this->toggelSidebar = !$this->toggelSidebar;
        Session::put('toggelSidebar', $this->toggelSidebar);
    }
    public function isActiveRoute($route)
    {
        return request()->url() === $route;
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
