{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required><br>

        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea><br>

        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Create Product</title>

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
            <div class="col-md-7 col-lg-6">

                <!-- Card -->
                <div class="card border-0 shadow">

                    <!-- Header -->
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h3 class="mb-0">Create Product</h3>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">

                        <form action="{{ route('products.update', $product->id) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter product name" required autocomplete="off" value="{{ $product->name }}"
>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Description</label>
                                <textarea name="description"  id="description" class="form-control" rows="4" placeholder="Enter product description" autocomplete="off">
                                    {{ $product->description }}
                                </textarea>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <label for="price" class="form-label fw-bold"> Price </label>
                                <div class="input-group">
                                    <span class="input-group-text"> Rp </span>
                                    <input type="number"  name="price"  id="price"  class="form-control"  placeholder="0" step="0.01" required value="{{ $product->price }}">
                                </div>
                            </div>

                            <!-- Stock -->
                            <div class="mb-4">
                                <label for="stock" class="form-label fw-bold"> Stock </label>
                                <input type="number" name="stock"  id="stock" class="form-control" placeholder="Enter stock" min="0" required value="{{ $product->stock }}">
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('products.index') }}" class="btn btn-secondary"> Back</a>
                                <button type="submit" class="btn btn-primary px-4"> Update Product </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
```