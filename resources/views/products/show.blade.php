<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
       <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    >
</head>
<body>
    <div class="container">
        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-3">Back to Product List</a>
        <h1 class="mt-4">Product Detail</h1>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $product->id }}</p>
                    <p><strong>Nama:</strong> {{ $product->name }}</p>
                    <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                    <p><strong>Harga:</strong> {{ $product->price }}</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
            </div>
        </div>
    </div>
</body>
</html>