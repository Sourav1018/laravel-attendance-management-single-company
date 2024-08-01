<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <button wire:click="previousMonth" class="bg-blue-500 text-white px-4 py-2 rounded">Previous</button>
        <h2 class="text-xl font-bold">{{ \Carbon\Carbon::create($currentYear, $currentMonth)->format('F Y') }}</h2>
        <button wire:click="nextMonth" class="bg-blue-500 text-white px-4 py-2 rounded">Next</button>
    </div>

    <div class="grid grid-cols-7 gap-4">
        @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
            <div class="font-bold">{{ $day }}</div>
        @endforeach

        @for ($i = 1; $i <= $daysInMonth; $i++)
            <div class="border p-2 {{ isset($attendanceRecords[$i]) ? 'bg-green-100' : 'bg-gray-100' }}">
                <div class="text-center">{{ $i }}</div>
                @if (isset($attendanceRecords[$i]))
                    <ul>
                        @foreach ($attendanceRecords[$i] as $attendance)
                            <li>{{ $attendance->user->name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endfor
    </div>
</div>
