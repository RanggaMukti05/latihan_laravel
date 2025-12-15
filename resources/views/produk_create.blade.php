<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <a href="/produk">Kembali ke Data Produk</a>
    <br><br>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/produk" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama" value="{{ old('nama') }}" required>
                </td>
            </tr>
            <tr>
                <td>ID Kategori</td>
                <td>
                    <input type="number" name="id_kategori" value="{{ old('id_kategori') }}" required>
                </td>
            </tr>
            <tr>
                <td>Qty</td>
                <td>
                    <input type="number" name="qty" value="{{ old('qty') }}" required>
                </td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td>
                    <input type="number" name="harga_beli" step="0.01" min="0" value="{{ old('harga_beli') }}" required>
                </td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td>
                    <input type="number" name="harga_jual" step="0.01" min="0" value="{{ old('harga_jual') }}" required>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit">Simpan Produk</button>
                    <button type="reset">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
