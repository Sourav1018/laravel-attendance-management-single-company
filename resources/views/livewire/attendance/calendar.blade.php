<div class="p-4">
    <div class="flex justify-between items-center mb-4">
        <select wire:model.live="currentYear" class="bg-gray-200 text-black px-4 py-2 rounded">
            @foreach ($years as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>
        <select wire:model.live="currentMonth" class="bg-gray-200 text-black px-4 py-2 rounded">
            @foreach ($months as $index => $month)
                <option value="{{ $index }}">{{ $month }}</option>
            @endforeach
        </select>
    </div>

    <div class="overflow-x-auto">
        <div class="grid grid-cols-7 gap-px bg-gray-300 border border-gray-300">
            <!-- Day Headings -->
            @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
                <div class="bg-blue-500 text-white py-2 text-center font-bold">{{ $day }}</div>
            @endforeach

            @php
                $startDay = \Carbon\Carbon::create($currentYear, $currentMonth, 1)->dayOfWeek;
                $totalDays = \Carbon\Carbon::create($currentYear, $currentMonth)->daysInMonth;
                $dayCounter = 1;
            @endphp

            <!-- Empty Cells Before Start Day -->
            @for ($i = 0; $i < $startDay; $i++)
                <div class="bg-gray-200 p-4"></div>
            @endfor

            <!-- Calendar Days -->
            @while ($dayCounter <= $totalDays)
                <div class="border border-gray-300 p-4 {{ isset($attendanceRecords[$dayCounter]) ? 'bg-green-100' : 'bg-gray-100' }}">
                    <div class="text-center font-medium">{{ $dayCounter }}</div>
                    @if (isset($attendanceRecords[$dayCounter]))
                        <ul class="text-xs">
                            @foreach ($attendanceRecords[$dayCounter] as $attendance)
                                <li>{{ $attendance->user->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @php $dayCounter++; @endphp
                </div>

                @if (($dayCounter + $startDay - 1) % 7 == 0)
                    <!-- Break to Next Week -->
                @endif
            @endwhile
        </div>
    </div>
</div>
