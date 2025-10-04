<div class="p-6 bg-gradient-to-br from-green-100 via-white to-green-50 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-6 border border-green-200">
        <h2 class="text-xl font-bold text-green-800 mb-4 text-center">
            Olahraga - Check In
        </h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-4 text-center font-medium">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-4 text-center font-medium">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('student.seven-habbits.sport.save') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Foto Kegiatan</label>
                <input type="file" name="photo"
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 p-2">
                @error('photo') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description"
                    class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200 p-2"
                    rows="3"></textarea>
                @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-4 rounded-lg shadow-md transition">
                ✅ Simpan Kegiatan
            </button>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('student.seven.habbits') }}"
                class="text-green-600 hover:text-green-800 font-medium underline">
                ← Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>
