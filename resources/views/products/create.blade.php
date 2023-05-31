<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/create.blade.php -->
<h1>Tambah Produk Baru</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <label for="name">Nama:</label>
    <input type="text" name="name" id="name">

    <label for="description">Deskripsi:</label>
    <textarea name="description" id="description"></textarea>

    <label for="price">Harga:</label>
    <input type="number" name="price" id="price">

    <button type="submit">Simpan</button>
</form>

</body>
</html>