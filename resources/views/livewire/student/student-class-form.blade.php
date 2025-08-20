@php
    use Carbon\Carbon;

    $today = Carbon::now()->locale('id')->dayName;
    $todaySchedule = $student->studentClass
        ->schedules
        ->where('day', ucfirst($today))
        ->unique(fn($item) => $item->teacher->subject ?? $item->code); // Hapus duplikat berdasarkan subject

@endphp

<div class="max-w-md mx-auto mt-4 p-4 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl shadow-lg text-white">
    <h2 class="text-2xl font-bold text-center mb-3">
        📅 Jadwal Hari Ini - {{ $today }}
    </h2>
    <p class="text-center text-sm opacity-80 mb-4">
        Siswa: <span class="font-semibold">{{ $student->name }}</span> <br>
        Kelas: <span class="font-semibold">{{ $student->studentClass->class ?? '-' }}</span>
    </p>

    @if ($todaySchedule->isEmpty())
        <div class="bg-white text-gray-700 p-4 rounded-xl text-center shadow-sm">
            Tidak ada jadwal untuk hari ini 🎉
        </div>
    @else
        <div class="space-y-3">
            @foreach ($todaySchedule as $item)
                <div class="bg-white text-gray-800 p-4 rounded-xl shadow-md">
                    <p class="font-bold text-lg">
                        {{ $item->teacher->subject ?? $item->code }}
                    </p>
                    @if(!empty($item->time))
                        <div class="mt-2 text-sm bg-blue-500 text-white px-3 py-1 rounded-lg shadow inline-block">
                            {{ $item->time }}
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
</div>
