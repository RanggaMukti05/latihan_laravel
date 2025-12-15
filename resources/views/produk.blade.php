<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>

    <a href="/produk/create">Masukan Data Produk Baru</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>ID_Kategori</th>
                <th>qty</th>
                <th>harga_beli</th>
                <th>harga_jual</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $produk)
            <tr>
                <td>{{ $produk->id}}</td>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->id_kategori }}</td>
                <td>{{ $produk->qty }}</td>
                <td>{{ $produk->harga_beli }}</td>
                <td>{{ $produk->harga_jual }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>