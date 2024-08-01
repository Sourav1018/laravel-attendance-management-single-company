<div id="layout-side-head">
    <aside
        class="flex flex-col bg-blue-800 text-white overflow-hidden min-h-screen p-4 duration-300 fixed z-999 lg:static lg:z-auto {{ $toggelFlag ? 'w-300' : 'w-16' }}">
        <div class="mb-2 flex items-center">
            <span
                class="min-w-8 flex items-center justify-center uppercase font-bold text-[22px] bg-gradient-to-r from-purple-500 to-indigo-500 rounded">t</span>
            <div class="w-52 px-4 truncate  uppercase font-bold text-lg">
                Technowebs
            </div>
        </div>
        <div class="flex justify-end mb-1">
            <button wire:click='toggelSidebar'
                class="w-8 text-3xl relative duration-300 hover:bg-gradient-to-r hover:bg-blue-500 hover:shadow-lg rounded-full {{ $toggelFlag ? '-top-12 -rotate-180 hover:-translate-x-1' : 'top-0 hover:translate-x-1' }}">
                <span class="mdi mdi-arrow-right-bold-circle-outline"></span>
            </button>
        </div>
        <ul class="-mx-4">
            @foreach ($routes as $index => $route)
                <li
                    class="py-2 px-4 duration-300 {{ $route['active'] ? 'bg-blue-700 border-r-4 border-r-blue-400' : '' }} hover:bg-blue-500 hover:cursor-pointer">
                    <div class="flex justify-between items-center">
                        @if (!empty($route['submenus']))
                            <span class="flex items-center flex-grow">
                                <i
                                    class="{{ $route['icon'] }} text-[32px] {{ $toggelFlag ? 'mr-4' : '' }} duration-300"></i>
                                <span class="ml-4 w-48 truncate">{{ $route['name'] }}</span>
                            </span>
                            <button wire:click="toggelSubmenu({{ $index }})"
                                class="duration-300 {{ $openSubmenus[$index] ? 'rotate-180' : 'rotate-0' }}">
                                <span class="mdi mdi-arrow-down-drop-circle-outline text-2xl"></span>
                            </button>
                        @else
                            <a href="{{ $route['route'] }}" class="flex items-center">
                                <i
                                    class="{{ $route['icon'] }} text-[32px] {{ $toggelFlag ? 'mr-4' : '' }} duration-300"></i>
                                <span class="ml-4">{{ $route['name'] }}</span>
                            </a>
                        @endif
                    </div>
                </li>
                    @if (!empty($route['submenus']))
                        <ul class="mx-4 p-4 bg-blue-900 {{ $toggelFlag && $openSubmenus[$index] ? '' : 'hidden' }} duration-300 rounded">
                            @foreach ($route['submenus'] as $submenu)
                                <li
                                    class="py-2 px-4 duration-300 {{ $submenu['active'] ? 'bg-blue-600 border-l-4 border-l-blue-400' : '' }} hover:bg-blue-500 hover:cursor-pointer">
                                    <a href="{{ $submenu['route'] }}" class="flex items-center duration-300">
                                        <span class="ml-4 duration-300">{{ $submenu['name'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

            @endforeach
        </ul>
        <div class="flex-1"></div>
        <ul class="-mx-4">
            <li class="py-2 px-4  hover:bg-blue-700 hover:cursor-pointer">
                <a href="#settings" class="flex items-center">
                    <i class="mdi mdi-cog-outline text-[32px] {{ $toggelFlag ? 'mr-4' : '' }} duration-300"></i>
                    <span class="ml-4">Settings</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
