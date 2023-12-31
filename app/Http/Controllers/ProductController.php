<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view("products/index", ["products" => $products]);
    }

    public function create() {
        return view("products/create");
    }

    public function store(Request $request) {
        // dd($request);
        // dd($request->name);
        $data = $request->validate([
            "name" => "required",
            "quantity" => "required|numeric",
            "price" => "required|decimal:0,2"
        ]);
        $newProduct = Product::create($data);
        return redirect(route("product/index"));
    }

    public function edit(Product $product) {
        // dd($product);
        return view("products/edit", ["product" => $product]);
    }

    public function update(Product $product, Request $request) {
        $data = $request->validate([
            "name" => "required",
            "quantity" => "required|numeric",
            "price" => "required|decimal:0,2"
        ]);
        $product->update($data);
        return redirect(route("product/index"))->with("success", "Product updated successfully");
    }

    public function delete(Product $product) {
        $product->delete();
        return redirect(route("product/index"))->with("success", "Product deleted successfully");
    }
}
