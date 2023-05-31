<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/edit.blade.php -->
<h1>Edit Produk</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nama:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}">

    <label for="description">Deskripsi:</label>
    <textarea name="description" id="description">{{ $product->description }}</textarea>

    <label for="price">Harga:</label>
    <input type="number" name="price" id="price" value="{{ $product->price }}">

    <button type="submit">Simpan</button>
</form>

</body>
</html>