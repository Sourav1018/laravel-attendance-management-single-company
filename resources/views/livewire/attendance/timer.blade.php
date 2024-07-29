<x-generic.card class="mt-4">
    <div class="text-center">
        <h2 class="text-xl font-bold mb-4">Attendance</h2>
        <div class="mb-4">
            <button wire:click="startTimer" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Check-In</button>
            <button wire:click="stopTimer" class="bg-red-500 text-white px-4 py-2 rounded">Check-Out</button>
        </div>
        <div>
            <span id="timer" class="text-2xl font-bold">{{ $startTime ? $startTime->diffForHumans($currentTime) : '00:00:00' }}</span>
        </div>
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('update-time', () => {
                const startTime = @this.get('startTime');
                const currentTime = @this.get('currentTime');
                if (startTime) {
                    const diff = (new Date(currentTime) - new Date(startTime)) / 1000;
                    const hours = Math.floor(diff / 3600);
                    const minutes = Math.floor((diff % 3600) / 60);
                    const seconds = Math.floor(diff % 60);
                    document.getElementById('timer').innerText = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
                }
            });
        });
    </script>
</x-generic.card>
