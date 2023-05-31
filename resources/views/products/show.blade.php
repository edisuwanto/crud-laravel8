<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- resources/views/products/show.blade.php -->
<h1>Detail Produk</h1>

<p>Nama: {{ $product->name }}</p>
<p>Deskripsi: {{ $product->description }}</p>
<p>Harga: {{ $product->price }}</p>

<a href="{{ route('products.edit', $product->id) }}">Edit</a>
<form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>

</body>
</html>