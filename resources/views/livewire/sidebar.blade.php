<div class="relative {{ $toggelSidebar ? 'w-72' : 'w-20' }} duration-300">
    <aside class="bg-gray-800 text-white {{ $toggelSidebar ? 'w-72' : 'w-20' }} duration-300 h-full fixed top-0 left-0">
        <div class="-right-3 top-4 absolute {{ $toggelSidebar ? '-rotate-180' : 'rotate-30' }} duration-300 cursor-pointer"
            wire:click='toggelSidebarState'>
            <svg class="h-7 w-7 bg-white rounded-full border border-gray-800 " xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <title>menu-right-outline</title>
                <path d="M9,6H10.5L16.5,12L10.5,18H9V6M13.67,12L11,9.33V14.67L13.67,12Z" />
            </svg>
        </div>
        <div class="inline-flex items-center justify-center m-2 space-x-2">
            <div
                class="float-left  bg-gradient-to-r from-purple-500 to-indigo-500 block rounded flex-shrink-0 {{ $toggelSidebar ? 'w-10 h-10' : 'w-16 h-10' }} uppercase font-bold text-2xl flex items-center justify-center">
                c
            </div>
            <div class="{{ $toggelSidebar ?: 'hidden' }} whitespace-nowrap">
                <h1 class="capitalize text-white origin-left font-medium text-2xl">
                    Comany name
                </h1>
            </div>
        </div>
        <div class="flex flex-col relative h-full">
                <nav class="flex-1">
                    <ul class="m-2">
                        @foreach ($routes as $route)
                            <li
                                class="cursor-pointer  hover:bg-gray-700 rounded  font-medium text-md {{ $route['active'] ? 'bg-gray-700' : '' }} mt-2 mb-2">
                                <a href="{{ $route['route'] }}"
                                    class="flex cursor-pointer {{ $toggelSidebar ? 'px-1 space-x-2' : '' }}">
                                    <span class="{{ $toggelSidebar ?: 'flex-1' }} flex justify-center">
                                        <i class="{{ $route['icon'] }} text-2xl"></i>
                                    </span>
                                    <span class="flex justify-center items-center">
                                        <span class="{{ $toggelSidebar ?: 'hidden' }}">{{ $route['name'] }}</span>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

            <div class="absolute  bottom-14 p-4">
                profile settings
            </div>
        </div>
    </aside>
</div>
