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
            <label for="alat_id">Pilih Alat:</label>
            <select id="alat_id" name="alat_id" required>
                <option value="">-- Pilih Alat --</option>
                @foreach ($alat as $item)
                    <option value="{{ $item->id }}" @if(isset($selectedAlatId) && $selectedAlatId == $item->id) selected @endif>{{ $item->nama ?? $item->name }}</option>
                @endforeach
            </select><br>
            <label for="count">Jumlah:</label>
            <input type="number" id="count" name="count" required>
        </div>
        <button type="submit">Pinjam</button>
    </form>
</body>
</html>