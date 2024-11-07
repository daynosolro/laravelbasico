@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>

        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>


            <select name="id_categoria" id="id_categoria">
        <option value="">Seleccione una categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id_categoria }}" {{ $product->id_categoria == $categoria->id_categoria ? 'selected' : '' }}>
                {{ $categoria->nombre }}
            </option>
        @endforeach
    </select>

            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </form>
    </div>
@endsection
