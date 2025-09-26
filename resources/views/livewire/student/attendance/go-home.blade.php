<div class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-br from-blue-50 to-white p-4"
     wire:poll.10s="generateBarcode">
    <div class="bg-white p-6 rounded-2xl shadow-lg text-center border max-w-xs w-full relative overflow-hidden">

        <div class="mb-4">
            <p class="text-sm text-gray-500">Siswa</p>
            <p class="text-lg font-semibold text-gray-800">{{ $studentName }}</p>
        </div>

        <h2 class="text-xl font-extrabold mb-5 text-blue-600 tracking-wide">Absen Pulang</h2>
        <div class="bg-gray-50 p-3 rounded-xl shadow-inner flex justify-center mb-5">
            {!! $barcodeSvg !!}
        </div>

        <p class="text-xs text-gray-500 mb-5">Kode ini akan berganti otomatis setiap 10 detik</p>

        <a href="{{ route('dashboard.siswa') }}"
           class="block w-full px-4 py-2 rounded-xl bg-blue-500 text-white font-semibold hover:bg-blue-600 transition duration-200">
            Kembali ke Dashboard
        </a>
        <div class="absolute top-0 right-0 w-24 h-24 bg-blue-100 rounded-bl-full -z-10"></div>
        <div class="absolute bottom-0 left-0 w-20 h-20 bg-blue-50 rounded-tr-full -z-10"></div>
    </div>
</div>
