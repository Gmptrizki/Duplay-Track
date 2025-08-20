<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Role</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-indigo-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 
             min-h-screen flex items-center justify-center p-6">

    <div class="w-full max-w-2xl mx-auto text-center animate-fade-in">
        <h1 class="text-3xl font-extrabold text-gray-800 dark:text-gray-100 mb-10">
            Pilih Login Sebagai
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="{{ route('login.siswa') }}" 
               class="group bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl 
                      transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 p-8 flex flex-col items-center">
                <div class="bg-indigo-100 dark:bg-indigo-600 rounded-full p-4 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-indigo-600 dark:text-white" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M12 14l6.16-3.422a12.083 12.083 0 01-.5 5.078A12.083 12.083 0 0112 21.5
                                 a12.083 12.083 0 01-5.66-5.844 12.083 12.083 0 01-.5-5.078L12 14z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 group-hover:text-indigo-600 
                           dark:group-hover:text-indigo-300">
                    Siswa
                </h2>
            </a>

            <a href="{{ route('login.guru') }}" 
               class="group bg-white dark:bg-gray-800 rounded-2xl shadow-lg hover:shadow-xl 
                      transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 p-8 flex flex-col items-center">
                <div class="bg-teal-100 dark:bg-teal-600 rounded-full p-4 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-teal-600 dark:text-white" 
                         fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.295.504 
                                 6.121 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                              d="M3 7h18M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 group-hover:text-teal-600 
                           dark:group-hover:text-teal-300">
                    Guru
                </h2>
            </a>
        </div>
    </div>

    <style>
        @keyframes fade-in {
            0% { opacity: 0; transform: translateY(10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in { animation: fade-in 0.7s ease-in-out; }
    </style>
</body>
</html>
