{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}">Create New Product</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    {{-- <ul>
        @foreach ($products as $product)
            <li>{{ $product->name }} - ${{ $product->price }}</li>
        @endforeach
    </ul>
    {{ $products->links() }} --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Product List</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    >
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Card -->
                <div class="card border-0 shadow">

                    <!-- Header -->
                    <div class="card-header bg-primary text-white py-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h3 class="mb-0"> Product List </h3>

                            <a href="{{ route('products.create') }}" class="btn btn-light">
                                + Create New Product
                            </a>
                        </div>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th width="70">No</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th width="200">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    @forelse ($products as $product)

                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td> {{ ucwords(strtolower($product->name)) }} </td>
                                            <td> {{ ucwords(strtolower($product->description)) }} </td>
                                            <td> Rp {{ number_format($product->price, 0, ',', '.') }} </td>
                                            <td>
                                                @if ($product->stock > 0)
                                                    <span class="badge bg-success">
                                                        {{ $product->stock }}
                                                    </span>
                                                @else
                                                    <span class="badge bg-danger">
                                                        Out of Stock
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="text-center" >
                                                <!-- Edit -->
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm"> Detail</a>
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"> Edit</a>

                                                <!-- Delete -->
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this product?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">
                                                No products available.
                                            </td>
                                        </tr>

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
```