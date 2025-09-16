<x-layouts.app :title="'Inventori'">
    <div class="bg-gray-950 text-gray-200 font-poppins">
        <header class="relative bg-gray-900 border-b border-gray-700">
            <nav class="flex items-center justify-between w-[90%] mx-auto">
                <div>
                    <img src="{{ asset('tes.png') }}" alt="logo" class="h-20 w-auto">
                </div>
                <div>
                    <ul class="flex items-center gap-9 px-9 py-4">
                        <li>
                            <a class="relative overflow-hidden transition-all duration-300 ease-in-out text-white px-3 py-2 group" href="/">
                                <span class="relative z-10">HOME</span>
                                <span class="absolute top-0 left-0 w-0 h-full bg-gradient-to-r from-cyan-500 to-blue-500 transition-all duration-500 group-hover:w-full z-0 rounded-md"></span>
                            </a>
                        </li>
                        <li>
                            <a aria-current="page" class="rounded-md bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-3 py-2 text-sm font-medium transition duration-300 transform hover:scale-105">
                                INVENTORY
                            </a>
                        </li>
                    </ul>
                </div>
                <div> 
                    <button class="ml-auto transition duration-300 ease-in-out hover:scale-110 bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-5 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl">
                        <a href="/admin/login">login admin</a>
                    </button>
                </div>
            </nav>
        </header>

        <section class="py-12 fade-in" style="animation-delay: 0.6s;">
            <div class="container mx-auto px-4">
                <h2 class="text-center text-3xl font-bold text-white">Barang</h2>
                <p class="text-center text-gray-400">Lihat barang-barang yang tersedia</p>
                <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($inventoryItems as $alat)
                        <div class="rounded-lg bg-gray-800 p-4 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg border border-gray-700 flex flex-col justify-between">
                            <img 
                                src="{{ asset('storage/' . $alat->foto) }}" 
                                alt="{{ $alat->name }}" 
                                class="h-48 w-full rounded-lg object-cover mb-4"
                            >
                            <div class="mt-auto">
                                <h3 class="text-xl font-semibold text-white">{{ $alat->name }}</h3>
                                <p class="text-gray-400">Jumlah: {{ $alat->count }}</p>
                                <a href="{{ route('alat.pinjam', ['alat_id' => $alat->id]) }}" class="mt-4 inline-block w-full text-center rounded-full px-4 py-2 font-semibold text-white transition duration-300 bg-gradient-to-r from-blue-600 to-indigo-700 hover:scale-105 shadow-lg hover:shadow-xl cursor-pointer">
                                    Pinjam
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>
