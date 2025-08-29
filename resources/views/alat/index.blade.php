<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Sistem Inventaris</title>
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-950 text-gray-200 font-poppins">
    <header class="relative bg-gray-900 border-b border-gray-700">
        <nav class="flex items-center justify-between w-[90%] mx-auto">
            <div>
                <img src="{{ asset('tes.png') }}" alt="logo" class="h-20 w-auto">
            </div>
            <div>
                <ul class="flex items-center gap-9 px-9 py-4">
                    <li><a aria-current="page" class="rounded-md bg-gradient-to-r from-cyan-500 to-blue-500 text-white px-3 py-2 text-sm font-medium transition duration-300 transform hover:scale-105">HOME</a></li>
                    <li>
                        <a class="relative overflow-hidden transition-all duration-300 ease-in-out text-white px-3 py-2 group" href="{{ route('alat.inventori') }}">
                            <span class="relative z-10">INVENTORY</span>
                            <span class="absolute top-0 left-0 w-0 h-full bg-gradient-to-r from-cyan-500 to-blue-500 transition-all duration-500 group-hover:w-full z-0 rounded-md"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div> 
                <button class="ml-auto transition duration-300 ease-in-out hover:scale-110 bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-5 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl"><a href="{{ route('login') }}">login admin</a></button>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mx-auto px-4 py-16 text-center">
            <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600 md:text-6xl fade-in">Selamat Datang di Portal Sarana & Prasarana</h1>
            <p class="mt-4 text-lg text-gray-400 fade-in" style="animation-delay: 0.2s;">
                Kelola dan temukan semua aset yang Anda butuhkan dengan mudah.
            </p>
            
            <section class="bg-gray-900 py-12 mt-16 rounded-3xl shadow-2xl fade-in" style="animation-delay: 0.4s;">
                <div class="container mx-auto px-4">
                    <h2 class="text-center text-3xl font-bold text-white">Ringkasan Data</h2>
                    <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-2">
                        
                        <div class="rounded-xl bg-gray-800 p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-2xl border border-gray-700">
                            <p class="text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-500">{{ $jumlahJenisAlat }}</p>
                            <p class="mt-2 text-gray-400">Total jenis Barang Terdaftar</p>
                        </div>
                        
                        <div class="rounded-xl bg-gray-800 p-6 shadow-md transition-transform transform hover:scale-105 hover:shadow-2xl border border-gray-700">
                            <p class="text-5xl font-bold text-green-400">{{ $availableAlatCount }}</p>
                            <p class="mt-2 text-gray-400">Barang Tersedia</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-12 fade-in" style="animation-delay: 0.6s;">
                <div class="container mx-auto px-4">
                    <h2 class="text-center text-3xl font-bold text-white">Barang Populer</h2>
                    <p class="text-center text-gray-400">Lihat barang-barang yang sering dicari</p>
                    <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach($barangPopuler as $alat)
                            <div class="rounded-lg bg-gray-800 p-4 shadow-md transition-transform transform hover:scale-105 hover:shadow-lg border border-gray-700 flex flex-col justify-between">
                                <img 
                                    src="{{ asset('storage/' . $alat->foto) }}" 
                                    alt="{{ $alat->name }}" 
                                    class="h-48 w-full rounded-lg object-cover mb-4"
                                >
                                <div class="mt-auto">
                                    <h3 class="text-xl font-semibold text-white">{{ $alat->name }}</h3>
                                    <p class="text-gray-400">Jumlah: {{ $alat->count }}</p>
                                    <a href="{{ route('alat.pinjam',['alat_id' => $alat->id]) }}" class="mt-4 inline-block w-full text-center rounded-full px-4 py-2 font-semibold text-white transition duration-300 bg-gradient-to-r from-blue-600 to-indigo-700 hover:scale-105 shadow-lg hover:shadow-xl">
                                        Pinjam
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <a href="{{ route('alat.inventori') }}" class="mt-12 inline-block rounded-full px-8 py-3 font-semibold text-white transition duration-300 bg-gradient-to-r from-blue-600 to-indigo-700 hover:scale-105 shadow-lg hover:shadow-2xl">
                Jelajahi Inventory
            </a>
        </div>
    </main>
</body>
</html>