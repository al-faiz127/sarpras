<div class="bg-gray-950 text-gray-200 font-poppins min-h-screen">
    <main>
        <div class="container mx-auto px-4 py-16">
            <div class="bg-gray-900 rounded-3xl shadow-2xl p-8 max-w-lg mx-auto border border-gray-700">
                <h2 class="text-2xl font-bold text-white mb-6 text-center">
                    isi data <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600">Peminjam</span>
                </h2>

                {{-- Alert sukses --}}
                @if (session()->has('success'))
                    <div class="p-3 rounded-lg bg-green-600 text-white text-sm text-center shadow mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- Form --}}
                <form wire:submit.prevent="save" class="space-y-6">
                    <div>
                        <label for="nisn" class="block mb-2 font-semibold text-gray-300">NISN</label>
                        <input type="text" id="nisn" wire:model="nisn"
                            class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 
                                   focus:ring-2 focus:ring-blue-500 outline-none border border-gray-700"
                            placeholder="Masukkan NISN">
                        @error('nisn') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    {{-- Input Nama --}}
                    <div>
                        <label for="nama" class="block mb-2 font-semibold text-gray-300">Nama</label>
                        <input type="text" id="nama" wire:model="nama"
                            class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 
                                   focus:ring-2 focus:ring-blue-500 outline-none border border-gray-700"
                            placeholder="Masukkan nama peminjam">
                        @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="jurusan" class="block mb-2 font-semibold text-gray-300">Jurusan</label>
                        <input type="number" id="jurusan" wire:model="jurusan"
                            class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 
                                   focus:ring-2 focus:ring-blue-500 outline-none border border-gray-700"
                            placeholder="Masukkan kode jurusan">
                        @error('jurusan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="kelas" class="block mb-2 font-semibold text-gray-300">Kelas</label>
                        <input type="text" id="kelas" wire:model="kelas"
                            class="w-full p-3 rounded-lg bg-gray-800 text-white placeholder-gray-400 
                                   focus:ring-2 focus:ring-blue-500 outline-none border border-gray-700"
                            placeholder="Masukkan kelas">
                        @error('kelas') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="gambar" class="block mb-2 font-semibold text-gray-300">Kartu Pelajar</label>
                        <input type="file" id="gambar" wire:model="gambar"
                            class="w-full text-gray-300 file:mr-4 file:py-2 file:px-4
                                   file:rounded-lg file:border-0
                                   file:bg-gradient-to-r file:from-blue-600 file:to-indigo-700
                                   file:text-white hover:file:opacity-90 
                                   cursor-pointer text-sm">
                        <div wire:loading wire:target="gambar" class="text-sm text-blue-400 mt-2">Uploading...</div>
                        @error('gambar') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>

                    <div class="flex gap-4 mt-6">
                        <button type="submit"
                            class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-700 py-3 rounded-lg 
                                   font-semibold text-white shadow-lg hover:scale-105 hover:shadow-xl 
                                   transition-transform duration-300">
                            Simpan
                        </button>
                        <a href="{{ url()->previous() }}"
                            class="flex-1 bg-gray-800 py-3 rounded-lg font-semibold text-white text-center 
                                   border border-gray-700 hover:bg-gray-700 hover:scale-105 transition-transform duration-300">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
