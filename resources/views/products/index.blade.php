@extends('products.layout')
@section('title', 'Products')
@section('content')
<section class="heading">
    <div>
        <p class="eyebrow">Inventory overview</p>
        <h1>Products</h1>
        <p class="lead">Manage product names, quantities, and prices through a focused Laravel workflow.</p>
    </div>
    <a class="button" href="{{ route('product/create') }}">+ Add product</a>
</section>
@if(session()->has("success"))
    <div class="notice" role="status">{{ session("success") }}</div>
@endif
<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Name</th><th>Quantity</th><th>Price</th><th>Actions</th></tr></thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><strong>{{ $product->name }}</strong></td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ number_format((float) $product->price, 2) }}</td>
                    <td>
                        <div class="actions">
                            <a class="text-link" href="{{ route('product/edit', ['product' => $product]) }}">Edit</a>
                            <form action="{{ route('product/delete', ['product' => $product]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="button danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td class="empty" colspan="5">No products yet. Add your first product to get started.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection