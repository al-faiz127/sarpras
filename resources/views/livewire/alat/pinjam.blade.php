<x-layouts.app :title="'Pinjam Alat'">
    <div class="bg-gray-950 text-gray-200 font-poppins min-h-screen">
        

        <main>
            <div class="container mx-auto px-4 py-16">
                <div class="bg-gray-900 rounded-3xl shadow-2xl p-8 max-w-md mx-auto border border-gray-700">
                    <h2 class="text-2xl font-bold text-white mb-6 text-center">
                        Pinjam Alat: <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">{{ $alat->name }}</span>
                    </h2>


                    <form action="{{ route('pinjam.submit', $alat->id) }}" method="POST" class="space-y-6">
                        @csrf
                        <img 
                            src="{{ asset('storage/' . $alat->foto) }}" 
                            alt="{{ $alat->nama }}" 
                            class="h-48 w-full rounded-lg object-cover mb-4"
                        >
                        <div>
                            <label for="count" class="block mb-2 font-semibold text-gray-300">Jumlah</label>
                            <input 
                                type="number" 
                                id="count" 
                                name="count" 
                                min="1" 
                                max="{{ $alat->count }}"
                                class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500 outline-none border border-gray-700"
                                placeholder="Masukkan jumlah yang ingin dipinjam"
                            />
                        </div>
                        

                        <div class="flex gap-4 mt-6">
                            <button type="submit"
                                class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-700 py-3 rounded-lg font-semibold text-white shadow-lg hover:scale-105 hover:shadow-xl transition-transform duration-300">
                                Pinjam
                            </button>
                            <a href="{{ route('alat.index') }}"
                                class="flex-1 bg-gray-800 py-3 rounded-lg font-semibold text-white text-center border border-gray-700 hover:bg-gray-700 hover:scale-105 transition-transform duration-300">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</x-layouts.app>
