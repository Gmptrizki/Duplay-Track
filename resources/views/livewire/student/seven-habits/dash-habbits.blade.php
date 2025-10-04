<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7 Kebiasaan Anak Indonesia Hebat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .kebiasaan-card {
            transition: all 0.3s ease;
        }
        .kebiasaan-card:hover {
            transform: translateY(-5px);
        }
        .kebiasaan-card a {
            display: flex;
            width: 100%;
            height: 100%;
            min-height: 120px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-100 via-white to-blue-50 min-h-screen p-4">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-extrabold text-blue-800 mb-4 drop-shadow">
                7 Kebiasaan Anak Indonesia Hebat
            </h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Bangun Pagi -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.up-early') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Bangun Pagi</span>
                </a>
            </div>

            <!-- Beribadah -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.praying') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Beribadah</span>
                </a>
            </div>

            <!-- Berolahraga -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.sport') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Berolahraga</span>
                </a>
            </div>

            <!-- Makan Sehat -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.eat') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Makan Sehat</span>
                </a>
            </div>

            <!-- Gemar Belajar -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.study') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Gemar Belajar</span>
                </a>
            </div>

            <!-- Bermasyarakat -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.social') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Bermasyarakat</span>
                </a>
            </div>

            <!-- Tidur Cepat -->
            <div class="kebiasaan-card bg-white rounded-xl shadow-md overflow-hidden border border-blue-100">
                <a href="{{ route('student.seven-habbits.sleep-early') }}" 
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>
                    <span class="font-semibold text-blue-700 text-center">Tidur Cepat</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>