<div class="p-6 bg-gradient-to-br from-blue-50 to-white min-h-screen">
    <!-- Header -->
    <h1 class="text-3xl font-bold text-blue-700 mb-6 border-b-4 border-blue-600 pb-2">
        Dashboard Guru
    </h1>

    <!-- Menu Grid -->
    <ul class="grid grid-cols-2 md:grid-cols-4 gap-6">

        <!-- Absensi Hari Ini -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-blue-500">
                <img src="{{ asset('images/icon/teachers/absensi_harian.webp') }}" class="w-16 h-16" alt="Absensi Hari Ini">
                <span class="text-blue-600 font-semibold text-center">Absensi Hari Ini</span>
            </a>
        </li>

        <!-- Rekap Absensi Harian -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-orange-500">
                <img src="{{ asset('images/icon/teachers/rekab_absensi_harian.webp') }}" class="w-16 h-16" alt="Rekap Absensi Harian">
                <span class="text-orange-500 font-semibold text-center">Rekap Absensi Harian</span>
            </a>
        </li>

        <!-- Absensi per Pelajaran -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-green-500">
                <img src="{{ asset('images/icon/teachers/absensi_pelajaran.webp') }}" class="w-16 h-16" alt="Absensi per Pelajaran">
                <span class="text-green-600 font-semibold text-center">Absensi per Pelajaran</span>
            </a>
        </li>

        <!-- Rekap Absensi Pelajaran -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-purple-500">
                <img src="{{ asset('images/icon/teachers/rekab_absensi_pelajaran.webp') }}" class="w-16 h-16" alt="Rekap Absensi Pelajaran">
                <span class="text-purple-600 font-semibold text-center">Rekap Absensi Pelajaran</span>
            </a>
        </li>

        <!-- Izin & Sakit -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-pink-500">
                <img src="{{ asset('images/icon/teachers/izin_sakit.webp') }}" class="w-16 h-16" alt="Izin & Sakit">
                <span class="text-pink-500 font-semibold text-center">Izin & Sakit</span>
            </a>
        </li>

        <!-- Pengaturan Kelas -->
        <li>
            <a href="#"
               class="flex flex-col items-center justify-between bg-white p-4 h-40 rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1 border-2 border-yellow-500">
                <img src="{{ asset('images/icon/teachers/pengaturan_kelas.webp') }}" class="w-16 h-16" alt="Pengaturan Kelas">
                <span class="text-yellow-500 font-semibold text-center">Pengaturan Kelas</span>
            </a>
        </li>

    </ul>
</div>
