@extends('products.layout')
@section('title', 'Edit Product')
@section('content')
<section class="heading">
    <div><p class="eyebrow">Inventory management</p><h1>Edit product</h1><p class="lead">Update this product and keep the inventory record accurate.</p></div>
    <a class="button" href="{{ route('product/index') }}">Back to products</a>
</section>
@if($errors->any())
<div class="errors" role="alert"><strong>Please review the form:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<form class="form-card" action="{{ route('product/update', ['product' => $product]) }}" method="POST">
    @csrf
    @method("put")
    <div class="field"><label for="name">Product name</label><input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" placeholder="Enter product name" required></div>
    <div class="field"><label for="quantity">Quantity</label><input id="quantity" type="number" min="0" step="1" name="quantity" value="{{ old('quantity', $product->quantity) }}" placeholder="0" required></div>
    <div class="field"><label for="price">Price</label><input id="price" type="number" min="0" step="0.01" name="price" value="{{ old('price', $product->price) }}" placeholder="0.00" required></div>
    <button class="button" type="submit">Update product</button>
</form>
@endsection