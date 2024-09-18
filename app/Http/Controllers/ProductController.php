<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(5); 
        return view('products.index', compact('products')); 
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        Product::create([
            'name' =>$request-> name,
            'description' =>$request-> description,
            'price' =>$request-> price,
            'quantity' =>$request -> quantity
        ]);

        return redirect('/products')->with('status', 'Product created successfully.'); 
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        $product->update($request->only(['name', 'description', 'price', 'quantity'])); // Clean approach

        return redirect()->route('product.index')->with('status', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('status', 'Product deleted successfully.');
    }
}
