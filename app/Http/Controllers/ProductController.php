<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::query()->latest()->paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('products.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            'quantity' => 'required|integer|min:0|max:2147483647',
            'price' => 'required|numeric|decimal:0,2|min:0|max:999999.99',
        ]);

        Product::create($data);

        return redirect()->route('product/index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product): View
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:10000',
            'quantity' => 'required|integer|min:0|max:2147483647',
            'price' => 'required|numeric|decimal:0,2|min:0|max:999999.99',
        ]);

        $product->update($data);

        return redirect()->route('product/index')->with('success', 'Product updated successfully.');
    }

    public function delete(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->route('product/index')->with('success', 'Product deleted successfully.');
    }
}
