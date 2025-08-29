<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pinjam Alat</h1>
    <form action="{{ route('alat.pinjam') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama Peminjam:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="alat_id">Pilih Alat:</label>
            <select id="alat_id" name="alat_id" required>
                <option value="">-- Pilih Alat --</option>
                @foreach ($alat as $item)
                    <option value="{{ $item->id }}" @if(isset($selectedAlatId) && $selectedAlatId == $item->id) selected @endif>{{ $item->nama ?? $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="tanggal_pinjam">Tanggal Pinjam:</label>
            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" required>
        </div>
        <div>
            <label for="tanggal_kembali">Tanggal Kembali:</label>
            <input type="date" id="tanggal_kembali" name="tanggal_kembali" required>
        </div>
        <button type="submit">Pinjam</button>
    </form>
</body>
</html>