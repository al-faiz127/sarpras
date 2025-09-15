<x-layouts.app :title="'Pinjam ' . $alatDipilih->name">

<div class="bg-gradient-to-br from-gray-950 via-gray-900 to-black text-white min-h-screen flex items-center justify-center px-4">
    <div class="bg-gray-800/80 backdrop-blur-md p-8 rounded-2xl shadow-2xl w-full max-w-md border border-gray-700">
        <h2 class="text-3xl font-extrabold mb-6 text-center text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">
            Pinjam {{ $alatDipilih->name }}
        </h2>

        <form wire:submit.prevent="submitPinjam" class="space-y-6">
            <input type="hidden" wire:model="alat_id">

            <div>
                <label for="count" class="block mb-2 font-semibold text-gray-300">Jumlah</label>
                <input 
                    type="number" 
                    id="count" 
                    wire:model="count"
                    min="1"
                    class="w-full p-3 rounded-lg bg-gray-900 text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500 outline-none"
                />

            </div>

            <div class="flex gap-4">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-blue-600 to-indigo-700 py-3 rounded-lg font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-transform duration-300">
                    Pinjam
                </button>
                <button 
                    type="button" 
                    onclick="window.location.href='/'"
                    class="flex-1 bg-gray-700 py-3 rounded-lg font-semibold shadow-lg hover:bg-gray-600 hover:scale-105 transition-transform duration-300"
                >
                    kembali
                </button>

            </div>
        </form>
    </div>
</div>
</x-layouts.app>
