<header class="bg-gray-800 text-white flex items-center justify-between p-4 shadow-md">
    <button id="hamburger" class="text-white">
    hamburger
    </button>

    <div class="relative">
        <button id="profile-settings" class="flex items-center space-x-2">
            <img src="{{ asset('images/profile-avatar.png') }}" alt="Profile" class="w-8 h-8 rounded-full">
            <span class="hidden lg:inline">Profile</span>
        </button>
        <div id="profile-menu" class="absolute right-0 mt-2 w-48 bg-white text-black rounded-lg shadow-lg hidden">
            <a href="#" class="block px-4 py-2">Profile Settings</a>
            <a href="#" class="block px-4 py-2">Logout</a>
        </div>
    </div>
</header>
