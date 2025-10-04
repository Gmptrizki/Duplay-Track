<div class="p-6 bg-gradient-to-br from-purple-100 via-white to-purple-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 border border-purple-200">
        <h2 class="text-xl font-bold text-purple-800 mb-4 text-center">
            Tidur Lebih Awal - Check In
        </h2>
        
        <div class="text-center text-gray-500 mb-2 text-sm">
            Waktu sekarang: <span id="currentTime" class="font-mono">{{ now()->format('H:i:s') }}</span>
        </div>

        <div id="countdownContainer" class="mb-4 p-3 bg-orange-50 border border-orange-200 rounded-lg">
            <div class="text-center text-orange-800 font-medium text-sm mb-2">
                ⏳ Reset Check-in Dalam:
            </div>
            <div id="countdown" class="text-center font-mono text-lg font-bold text-orange-600">
                00:00:00
            </div>
            <div class="text-center text-xs text-orange-600 mt-1">
                Check-in akan tersedia lagi besok malam
            </div>
        </div>

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
            Klik tombol di bawah untuk mencatat waktu tidur lebih awalmu hari ini 🛌✨
        </div>

        <form action="{{ route('student.seven-habbits.sleep-early.save') }}" method="POST">
            @csrf
            <button type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md transition duration-200 transform hover:scale-105">
                ✅ Check In Tidur Sekarang
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('student.seven.habbits') }}"
                class="text-purple-600 hover:text-purple-800 font-medium underline transition duration-200">
                ← Kembali ke Dashboard
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
            document.getElementById('countdownContainer').innerHTML = `
                <div class="text-center text-green-600 font-medium">
                    ✅ Check-in tersedia! Hari sudah reset
                </div>
            `;
        }
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);

    // sembunyikan countdown kalau user belum pernah check-in
    @if(!session('error') || !str_contains(session('error') ?? '', 'sudah'))
        document.getElementById('countdownContainer').style.display = 'none';
    @endif
</script>
