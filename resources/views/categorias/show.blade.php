@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Precio: ${{ $product->price }}</p>

        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar Producto</a>
    </div>
@endsection
