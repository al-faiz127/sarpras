<x-layouts.app :title="'Pinjam Alat'">
    <div class="container mx-auto px-4 py-16">
        <div class="bg-gray-900 rounded-2xl shadow-2xl p-6 max-w-md mx-auto">
            <h2 class="text-2xl font-bold text-white mb-4">Pinjam Alat: {{ $alat->name }}</h2>

            <form action="{{ route('pinjam.submit', $alat->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="count" class="block mb-2 font-semibold text-gray-300">Jumlah</label>
                    <input type="number" id="count" name="count" min="1" max="{{ $alat->count }}"
                           class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500 outline-none" />
                </div>

                <div class="flex gap-4 mt-4">
                    <button type="submit" class="flex-1 bg-blue-600 py-3 rounded-lg font-semibold text-white hover:bg-blue-700">Pinjam</button>
                    <a href="{{ route('alat.index') }}" class="flex-1 bg-gray-700 py-3 rounded-lg font-semibold text-white text-center hover:bg-gray-600">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>