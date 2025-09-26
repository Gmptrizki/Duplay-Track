<header
    class="w-full px-4 sm:px-6 lg:px-8 py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 shadow-lg sticky top-0 z-50">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-3">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo Duplay-Track"
                class="w-10 h-10 rounded-full shadow-md bg-white p-1">
            <span class="text-xl font-bold text-white tracking-wide">Duplay-Track</span>
        </a>

        <!-- Login / Dropdown -->
        @if (!in_array(Route::currentRouteName(), ['login.siswa', 'login.guru']))
        @auth
        <div class="relative group">
            <!-- Nama Depan -->
            <button
                class="px-5 py-2 text-sm font-medium text-indigo-600 bg-white rounded-lg shadow hover:bg-gray-100 flex items-center gap-2">
                {{ explode(' ', Auth::user()->name)[0] }}
                <svg class="w-4 h-4 text-indigo-600" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <div
                class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 group-hover:opacity-100 transform scale-95 group-hover:scale-100 transition-all duration-200 origin-top-right">
                <form method="get"
                    action="{{ auth()->user()->role === 'siswa' ? route('dashboard.siswa') : route('dashboard.guru') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Dashboard
                    </button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            </div> 
        </div>
        @else
        <a href="{{ route('login.siswa') }}"
            class="px-5 py-2 text-sm font-medium text-indigo-600 bg-white rounded-lg shadow hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-indigo-600 transition">
            Login
        </a>
        @endauth
        @endif
    </div>
</header>