<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Peminjam Baru</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-xl w-full max-w-md">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Tambah Peminjam Baru</h1>
        <p class="text-center text-gray-500 mb-8">Silakan isi data di bawah untuk menambahkan peminjam.</p>
        
        

        <form action="{{ route('peminjam.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-5">
                <label for="nama" class="block text-gray-700 text-sm font-semibold mb-2">Nama Peminjam</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
            </div>

            <div class="mb-5">
                <label for="nisn" class="block text-gray-700 text-sm font-semibold mb-2">NISN</label>
                <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
            </div>

            <div class="mb-5">
                <label for="jurusan" class="block text-gray-700 text-sm font-semibold mb-2">Jurusan</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Masukkan Jurusan"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
            </div>

            <div class="mb-5">
                <label for="kelas" class="block text-gray-700 text-sm font-semibold mb-2">Kelas</label>
                <input type="text" id="kelas" name="kelas" placeholder="Masukkan Kelas"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
            </div>

            <div class="mb-5">
                <label for="gambar" class="block text-gray-700 text-sm font-semibold mb-2">Kartu Pelajar (Gambar)</label>
                <input type="file" id="gambar" name="gambar"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 ease-in-out">
            </div>

            <button type="submit"
                    class="w-full bg-blue-600 text-white font-bold py-2.5 px-4 rounded-lg shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                Tambah Peminjam
            </button>
        </form>
    </div>
</body>
</html>
