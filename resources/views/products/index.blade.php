@extends('products.layout')
@section('title', 'Products')
@section('content')
<section class="heading">
    <div>
        <p class="eyebrow">Inventory overview</p>
        <h1>Products</h1>
        <p class="lead">Manage product details, stock quantities, and unit prices through a focused Laravel workflow.</p>
    </div>
    <a class="button" href="{{ route('product/create') }}">+ Add product</a>
</section>
@if(session()->has("success"))
    <div class="notice" role="status">{{ session("success") }}</div>
@endif
<div class="table-card">
    <table>
        <thead><tr><th>ID</th><th>Name</th><th>Description</th><th>Quantity</th><th>Unit price</th><th>Actions</th></tr></thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><strong>{{ $product->name }}</strong></td>
                    <td class="description">{{ $product->description }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ number_format((float) $product->price, 2) }}</td>
                    <td>
                        <div class="actions">
                            <a class="text-link" href="{{ route('product/edit', ['product' => $product]) }}">Edit</a>
                            <form action="{{ route('product/delete', ['product' => $product]) }}" method="POST" onsubmit="return confirm('Delete this product? This action cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button class="button danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td class="empty" colspan="6">No products yet. Add your first product to get started.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@if ($products->hasPages())
    <nav class="pagination" aria-label="Product pages">
        @if ($products->onFirstPage())
            <span aria-disabled="true">Previous</span>
        @else
            <a href="{{ $products->previousPageUrl() }}" rel="prev">Previous</a>
        @endif
        <span class="page-count">Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</span>
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" rel="next">Next</a>
        @else
            <span aria-disabled="true">Next</span>
        @endif
    </nav>
@endif
@endsection
