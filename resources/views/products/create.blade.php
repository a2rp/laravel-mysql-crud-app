@extends('products.layout')
@section('title', 'Add Product')
@section('content')
<section class="heading">
    <div><p class="eyebrow">Inventory management</p><h1>Add product</h1><p class="lead">Create a product with a valid name, quantity, and price.</p></div>
    <a class="button" href="{{ route('product/index') }}">Back to products</a>
</section>
@if($errors->any())
<div class="errors" role="alert"><strong>Please review the form:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
@endif
<form class="form-card" action="{{ route('product/store') }}" method="POST">
    @csrf
    <div class="field"><label for="name">Product name</label><input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="Enter product name" required></div>
    <div class="field"><label for="quantity">Quantity</label><input id="quantity" type="number" min="0" step="1" name="quantity" value="{{ old('quantity') }}" placeholder="0" required></div>
    <div class="field"><label for="price">Price</label><input id="price" type="number" min="0" step="0.01" name="price" value="{{ old('price') }}" placeholder="0.00" required></div>
    <button class="button" type="submit">Save product</button>
</form>
@endsection