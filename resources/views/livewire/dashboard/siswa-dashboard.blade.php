<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .dashboard-card {
            transition: all 0.3s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .dashboard-card a {
            display: flex;
            width: 100%;
            height: 100%;
            min-height: 150px;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-white min-h-screen p-4">
    <div class="max-w-4xl mx-auto">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-indigo-700 mb-2 border-b-4 border-indigo-600 pb-3">
                Dashboard Siswa
            </h1>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
            <!-- Absensi Pelajaran -->
            <div class="dashboard-card bg-white rounded-2xl border-2 border-gray-300 shadow overflow-hidden">
                <a href="#"
                   class="flex flex-col items-center justify-center p-5 hover:bg-indigo-50 transition-colors">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <span class="text-indigo-700 font-semibold text-center leading-tight">Absensi Pelajaran</span>
                </a>
            </div>

            <!-- Izin -->
            <div class="dashboard-card bg-white rounded-2xl border-2 border-gray-300 shadow overflow-hidden">
                <a href="#"
                   class="flex flex-col items-center justify-center p-5 hover:bg-yellow-50 transition-colors">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <span class="text-yellow-600 font-semibold text-center leading-tight">Izin</span>
                </a>
            </div>

            <!-- Absen Masuk -->
            <div class="dashboard-card bg-white rounded-2xl border-2 border-gray-300 shadow overflow-hidden">
                <a href="#"
                   class="flex flex-col items-center justify-center p-5 hover:bg-green-50 transition-colors">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="text-green-600 font-semibold text-center leading-tight">Absen Masuk</span>
                </a>
            </div>

            <!-- Absen Pulang -->
            <div class="dashboard-card bg-white rounded-2xl border-2 border-gray-300 shadow overflow-hidden">
                <a href="#"
                   class="flex flex-col items-center justify-center p-5 hover:bg-red-50 transition-colors">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <span class="text-red-500 font-semibold text-center leading-tight">Absen Pulang</span>
                </a>
            </div>

            <!-- 7 Kebiasaan Anak Indonesia Hebat -->
            <div class="dashboard-card col-span-2 md:col-span-4 bg-white rounded-2xl border-2 border-gray-300 shadow overflow-hidden">
                <a href="{{ route('student.seven.habbits') }}"
                   class="flex flex-col items-center justify-center p-6 hover:bg-blue-50 transition-colors">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <span class="text-gray-800 font-semibold text-center text-lg leading-tight">
                        7 Kebiasaan Anak Indonesia Hebat
                    </span>
                    <p class="text-gray-500 text-sm mt-2 text-center">Kembangkan kebiasaan positif setiap hari</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>