<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $product->nama }}</h2>

    <p><strong>Kategori:</strong> {{ $product->kategori }}</p>
    <p><strong>Harga:</strong> {{ $product->harga }}</p>

    @if($product->keterangan)
    <p><strong>Keterangan:</strong> {{ $product->keterangan }}</p>
    @endif

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
</div>
@endsection