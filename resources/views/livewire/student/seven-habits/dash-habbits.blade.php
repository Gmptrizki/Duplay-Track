<link rel="stylesheet" href="{{ asset('sevenhabbits/sevenhabbits.css') }}">

<div class="p-6 bg-gradient-to-br from-blue-100 via-white to-blue-50 min-h-screen">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-blue-800 mb-3 drop-shadow">
            7 Kebiasaan Anak Indonesia Hebat
        </h1>
        <p class="text-gray-600">Pilih kebiasaan yang ingin kamu check-in hari ini</p>
    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-5">
        {{-- Bangun Pagi --}}
        <div class="kebiasaan-card">
            <a href="{{ route('student.seven-habbits.up-early') }}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Bangun Pagi</span>
            </a>
        </div>

        {{-- Beribadah --}}
        <div class="kebiasaan-card">
            <a href="{{ route ('student.seven-habbits.praying') }}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Beribadah</span>
            </a>
        </div>

        <div class="kebiasaan-card">
            <a href="{{ route ('student.seven-habbits.sport') }}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Berolahraga</span>
            </a>
        </div>

        {{-- Makan Sehat --}}
        <div class="kebiasaan-card">
            <a href="{{route ('student.seven-habbits.eat') }}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Makan Sehat</span>
            </a>
        </div>

        <div class="kebiasaan-card">
            <a href="{{ route ('student.seven-habbits.study') }}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Gemar Belajar</span>
            </a>
        </div>

        <div class="kebiasaan-card">
            <a href="{{ route ('student.seven-habbits.social')}}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Bermasyarakat</span>
            </a>
        </div>

        <div class="kebiasaan-card">
            <a href="{{ route ('student.seven-habbits.sleep-early')}}"
                class="flex flex-col items-center justify-center p-6 bg-white shadow rounded-xl hover:bg-blue-100 transition">
                <span class="font-semibold text-blue-700">Tidur Cepat</span>
            </a>
        </div>
    </div>
</div>