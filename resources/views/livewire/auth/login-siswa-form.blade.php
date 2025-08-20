<div class="w-full max-w-md mx-auto bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-6 text-center">Login Siswa</h2>

    <form wire:submit.prevent="login" class="space-y-5">
        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
            <input wire:model.defer="email" type="email" id="email"
                   class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                   placeholder="Masukkan email" required autofocus>
            @error('email') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
            <input wire:model.defer="password" type="password" id="password"
                   class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                   placeholder="Masukkan password" required>
            @error('password') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Remember -->
        <div class="flex items-center">
            <input wire:model.defer="remember" type="checkbox" id="remember"
                   class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
            <label for="remember" class="ml-2 text-sm text-gray-600 dark:text-gray-300">Ingat Saya</label>
        </div>

        <button type="submit"
                class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow hover:bg-indigo-700 transition">
            Masuk
        </button>
    </form>
</div>
