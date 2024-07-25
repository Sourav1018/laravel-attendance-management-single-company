import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const profileButton = document.getElementById('profile-settings');
    const profileMenu = document.getElementById('profile-menu');
    const sidebar = document.getElementById('sidebar'); // Assuming you have an ID for the sidebar

    // Toggle sidebar
    hamburger.addEventListener('click', () => {
        sidebar.classList.toggle('hidden');
    });

    // Toggle profile menu
    profileButton.addEventListener('click', () => {
        profileMenu.classList.toggle('hidden');
    });

    // Close profile menu if clicked outside
    document.addEventListener('click', (event) => {
        if (!profileButton.contains(event.target) && !profileMenu.contains(event.target)) {
            profileMenu.classList.add('hidden');
        }
    });
});
