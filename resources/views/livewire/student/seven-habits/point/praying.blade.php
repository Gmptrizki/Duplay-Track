<div class="p-6 bg-gradient-to-br from-green-100 via-white to-green-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 border border-green-200">
        <h2 class="text-xl font-bold text-green-800 mb-4 text-center">
            <i class="fas fa-praying-hands mr-2"></i>
            Berdoa - Check In
        </h2>

        <div class="text-center text-gray-500 mb-2 text-sm">
            Waktu sekarang: <span id="currentTime" class="font-mono">{{ now()->format('H:i:s') }}</span>
        </div>

        @if($alreadyCheckedIn)
        <div id="countdownContainer" class="mb-4 p-3 bg-orange-50 border border-orange-200 rounded-lg">
            <div class="text-center text-orange-800 font-medium text-sm mb-2">
                ⏳ Reset Check-in Berdoa Dalam:
            </div>
            <div id="countdown" class="text-center font-mono text-lg font-bold text-orange-600">
                00:00:00
            </div>
            <div class="text-center text-xs text-orange-600 mt-1">
                Check-in berdoa akan tersedia lagi besok
            </div>
        </div>
        @endif

        @if (session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4 text-center font-medium">
            {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-center font-medium">
            {{ session('error') }}
        </div>
        @endif

        <div class="text-center text-gray-600 mb-6">
            Klik tombol di bawah untuk mencatat kegiatan berdoamu hari ini.<br>
            Jam akan otomatis tersimpan sesuai waktu sekarang.
        </div>

        @if(!$alreadyCheckedIn)
        <form action="{{ route('student.seven-habbits.praying.save') }}" method="POST">
            @csrf
            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md transition duration-200 transform hover:scale-105">
                <i class="fas fa-pray mr-2"></i>
                ✅ Check In Berdoa Sekarang
            </button>
        </form>
        @else
        <div class="w-full bg-gray-400 text-white font-semibold py-3 px-4 rounded-lg shadow-md text-center">
            <i class="fas fa-check-circle mr-2"></i>
            Sudah Check-In Hari Ini
        </div>
        @endif

        <div class="mt-6 text-center">
            <a href="{{ route('student.seven.habbits') }}"
                class="text-green-600 hover:text-green-800 font-medium underline transition duration-200">
                <i class="fas fa-arrow-left mr-1"></i>
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

<script>
    function updateTime() {
            const now = new Date();
            document.getElementById('currentTime').textContent = 
                now.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
        }
        setInterval(updateTime, 1000);

        function updateCountdown() {
            const now = new Date();
            const tomorrow = new Date(now);
            tomorrow.setDate(tomorrow.getDate() + 1);
            tomorrow.setHours(0, 0, 0, 0); 
            
            const timeDiff = tomorrow - now;
            
            if (timeDiff > 0) {
                const hours = Math.floor(timeDiff / (1000 * 60 * 60));
                const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);
                
                document.getElementById('countdown').textContent = 
                    `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            } else {
                document.getElementById('countdown').textContent = '00:00:00';
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            }
        }

        if (document.getElementById('countdownContainer')) {
            updateCountdown();
            setInterval(updateCountdown, 1000);
        }
</script>