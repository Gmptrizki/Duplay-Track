<link rel="stylesheet" href="{{ asset('sevenhabbits/sevenhabbits.css') }}">
<div class="p-6 bg-gradient-to-br from-blue-100 via-white to-blue-50 min-h-screen">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-blue-800 mb-3 drop-shadow">
            7 Kebiasaan Anak Indonesia Hebat
        </h1>
        <div class="mt-4 bg-white p-5 rounded-2xl border border-blue-200 shadow-lg">
            <div class="flex justify-between text-sm text-blue-700 mb-2">
                <span>Progress Harian</span>
                <span id="progressPercent">0%</span>
            </div>
            <div class="w-full bg-blue-100 rounded-full h-4 overflow-hidden">
                <div id="progressFill"
                     class="bg-gradient-to-r from-red-400 to-yellow-400 h-4 rounded-full transition-all duration-700 ease-out"
                     style="width: 0%">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5">
        <div class="kebiasaan-card">
            <div class="icon">🌅</div>
            <span>Bangun Pagi</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">🙏</div>
            <span>Beribadah</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">🏃</div>
            <span>Berolahraga</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">🍎</div>
            <span>Makan Sehat</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">📚</div>
            <span>Gemar Belajar</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">👥</div>
            <span>Bermasyarakat</span>
        </div>

        <div class="kebiasaan-card">
            <div class="icon">😴</div>
            <span>Tidur Cepat</span>
        </div>
    </div>
</div>

<script src="{{ asset('sevenhabbits/sevenhabbits.js') }}"></script>
