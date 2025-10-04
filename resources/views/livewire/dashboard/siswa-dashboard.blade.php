<div class="p-6 bg-gradient-to-br from-gray-50 to-white min-h-screen">
    <h1 class="text-3xl font-bold text-indigo-700 mb-6 border-b-4 border-indigo-600 pb-2">
        Dashboard Siswa
    </h1>
    <ul class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <li>
            <a href="#"
                class="flex flex-col items-center justify-between bg-white p-4 rounded-2xl border-2 border-gray-300 shadow hover:shadow-lg transition hover:-translate-y-1 hover:border-indigo-500 min-h-[150px]">
                <img src="{{ asset('images/icon/students/kehadiran.webp') }}" class="w-16 h-16 mb-2" alt="Kehadiran">
                <span class="text-indigo-700 font-semibold text-center leading-tight">Absensi Pelajaran</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-col items-center justify-between bg-white p-4 rounded-2xl border-2 border-gray-300 shadow hover:shadow-lg transition hover:-translate-y-1 hover:border-yellow-500 min-h-[150px]">
                <img src="{{ asset('images/icon/students/izin.webp') }}" class="w-16 h-16 mb-2" alt="Izin">
                <span class="text-yellow-600 font-semibold text-center leading-tight">Izin</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-col items-center justify-between bg-white p-4 rounded-2xl border-2 border-gray-300 shadow hover:shadow-lg transition hover:-translate-y-1 hover:border-green-500 min-h-[150px]">
                <img src="{{ asset('images/icon/students/masuk.webp') }}" class="w-16 h-16 mb-2" alt="Absen Masuk">
                <span class="text-green-600 font-semibold text-center leading-tight">Absen Masuk</span>
                {{-- {{ route('student.barcode.checkin') }} --}}
            </a>
        </li>

        <li>
            <a href="#"
                class="flex flex-col items-center justify-between bg-white p-4 rounded-2xl border-2 border-gray-300 shadow hover:shadow-lg transition hover:-translate-y-1 hover:border-red-500 min-h-[150px]">
                <img src="{{ asset('images/icon/students/pulang.webp') }}" class="w-16 h-16 mb-2" alt="Absen Pulang">
                <span class="text-red-500 font-semibold text-center leading-tight">Absen Pulang</span>
            </a>
            {{-- {{ route('student.barcode.gohome') }} --}}
        </li>
        <li class="col-span-2 md:col-span-4 flex justify-center">
            <a href="{{ route('student.seven.habbits') }}"
                class="flex flex-col items-center bg-white p-4 w-full max-w-xs rounded-2xl border-2 border-gray-300 shadow hover:shadow-lg transition hover:-translate-y-1 min-h-[150px]">
                <img src="{{ asset('images/icon/students/7kebiasaan.webp') }}" class="w-16 h-16 mb-2"
                    alt="Kebiasaan Anak Indonesia Hebat">
                <span class="text-gray-800 font-semibold text-center leading-tight">
                    Kebiasaan Anak Indonesia Hebat
                </span>
            </a>
        </li>
    </ul>
</div>