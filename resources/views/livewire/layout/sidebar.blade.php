<div id="layout-side-head">
    <aside
        class="flex flex-col bg-blue-800 text-white overflow-hidden min-h-screen p-4 duration-300 fixed z-999 lg:static lg:z-auto {{ $toggelFlag ? 'w-300' : 'w-16' }}">
        <div class="mb-2 flex">
            <span
                class="w-8 flex items-center justify-center uppercase font-bold text-[22px] bg-gradient-to-r from-purple-500 to-indigo-500 rounded">c</span>
            {{-- <span>Company</span> --}}
        </div>
        <div class="flex justify-end mb-4">
            <button wire:click='toggelSidebar'
                class="w-8 text-3xl relative duration-300 hover:bg-gradient-to-r hover:bg-blue-700 hover:shadow-lg rounded-full {{ $toggelFlag ? '-top-12 -rotate-180 hover:-translate-x-1' : 'top-0 hover:translate-x-1' }}">
                <span class="mdi mdi-arrow-right-bold-circle-outline"></span>
            </button>
        </div>
        @if ($toggelFlag)

        <h3 class="capitalize lg:text-xl font-bold duration-300 {{ $toggelFlag ? 'opacity-100' : 'opacity-0' }}">menu
        </h3>
        @endif
        <ul class="-mx-4">
            <li class="py-2 px-4 duration-300  hover:bg-blue-700 hover:cursor-pointer">
                <a href="/dashboard" class="flex items-center">
                    <i class="mdi mdi-view-dashboard-outline text-[32px]"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="py-2 px-4  hover:bg-blue-700 hover:cursor-pointer">
                <a href="#attendance" class="flex items-center">
                 <i class="mdi mdi-calendar-check-outline text-[32px]"></i>
                 <span class="ml-4">Attendance</span>
                </a>
            </li>
            <li class="py-2 px-4  hover:bg-blue-700 hover:cursor-pointer">
                <a href="#leave" class="flex items-center">
                    <i class="mdi mdi-email-outline text-[32px]"></i>
                    <span class="ml-4">Leave</span>
                </a>
            </li>
            <li class="py-2 px-4  hover:bg-blue-700 hover:cursor-pointer">
                <a href="#holidays" class="flex items-center">
                    <i class="mdi mdi-list-box-outline text-[32px]"></i>
                    <span class="ml-4">holiday</span>
                </a>
            </li>
        </ul>

        {{ $toggelFlag }}
    </aside>
</div>
