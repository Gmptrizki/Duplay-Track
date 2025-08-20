<div class="px-4 py-6 relative overflow-hidden">
    <h2 class="text-xl font-semibold text-center text-gray-800 dark:text-gray-200 mb-4">
        Guru Piket Hari Ini
    </h2>

    @if($teachers->count() > 0)
        <div class="overflow-hidden relative w-full">
            <div class="flex gap-4 animate-scroll">
                @foreach($teachers as $teacher)
                    <div class="w-48 flex-shrink-0 bg-gradient-to-br from-indigo-500 to-teal-400 rounded-xl shadow-lg p-4 text-center">
                        <svg class="mx-auto w-10 h-10 text-white mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 14.25c-1.5 0-3.25-.5-4.5-1.5V21h9v-8.25c-1.25 1-3 1.5-4.5 1.5z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 12a4.5 4.5 0 100-9 4.5 4.5 0 000 9z" />
                        </svg>
                        <p class="text-white font-semibold text-lg truncate">{{ $teacher['name'] }}</p>
                        <p class="text-white text-sm opacity-90 truncate">{{ $teacher['subject'] }}</p>
                    </div>
                @endforeach
                @foreach($teachers as $teacher)
                    <div class="w-48 flex-shrink-0 bg-gradient-to-br from-indigo-500 to-teal-400 rounded-xl shadow-lg p-4 text-center">
                        <svg class="mx-auto w-10 h-10 text-white mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 14.25c-1.5 0-3.25-.5-4.5-1.5V21h9v-8.25c-1.25 1-3 1.5-4.5 1.5z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 12a4.5 4.5 0 100-9 4.5 4.5 0 000 9z" />
                        </svg>
                        <p class="text-white font-semibold text-lg truncate">{{ $teacher['name'] }}</p>
                        <p class="text-white text-sm opacity-90 truncate">{{ $teacher['subject'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="text-center text-gray-600 dark:text-gray-400 mt-6">
            <svg class="mx-auto w-14 h-14 text-gray-400 animate-bounce-slow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5l9-4.5 9 4.5M4.5 10.5h15M6 21h12M6 17h12" />
            </svg>
            <p class="mt-3 text-lg font-semibold animate-wiggle">Sekolah Libur, Tidak Ada Guru Piket</p>
        </div>
    @endif

    <style>
        .animate-scroll {
            display: flex;
            width: max-content;
            animation: scroll-horizontal 45s linear infinite;
        }
        @keyframes scroll-horizontal {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .animate-bounce-slow {
            animation: bounce-slow 2.5s infinite;
        }
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }

        .animate-wiggle {
            display: inline-block;
            animation: wiggle 1.2s ease-in-out infinite;
        }
        @keyframes wiggle {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(2deg); }
            75% { transform: rotate(-2deg); }
        }
    </style>
</div>
