<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() : View
    {
        $products = Product::all();
        return view('products.index', compact('products'));
        // // KODING UNTUK MENAMPILKAN DATA TERBARU DENGAN FILTER 10 DATA PER HALAMAN
        // $products = Product::latest()->paginate(10);

        // // KODING UNTUK MENGEMBALIKAN VIEW DENGAN DATA PRODUK
        // return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy (Product $product)
    {
        // KODING UNTUK MENGHAPUS DATA PRODUK
        $product = Product::findOrFail($product->id);
        $product->delete();

        // KODING UNTUK MENGEMBALIKAN REDIRECT DENGAN PESAN SUKSES
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
        