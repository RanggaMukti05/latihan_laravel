<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <h1>Edit Produk</h1>

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

    <form action="/produk/{{ $produk->id }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama"
                        value="{{ old('nama', $produk->nama) }}" required>
                </td>
            </tr>
                        <tr>
                <td>ID Kategori</td>
                <td>
                    <input type="number" name="id_kategori"
                        value="{{ old('id_kategori', $produk->id_kategori) }}" required>
                </td>
            </tr>

            <tr>
                <td>Quantity</td>
                <td>
                    <input type="number" name="qty"
                        value="{{ old('qty', $produk->qty) }}" required>
                </td>
            </tr>

            <tr>
                <td>Harga Beli</td>
                <td>
                    <input type="number" name="harga_beli"
                        value="{{ old('harga_beli', $produk->harga_beli) }}" required>
                </td>
            </tr>

            <tr>
                <td>Harga Jual</td>
                <td>
                    <input type="number" name="harga_jual"
                        value="{{ old('harga_jual', $produk->harga_jual) }}" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit">Update Produk</button>
                </td>
            </tr>
        </table>

    </form>

</body>
</html>
