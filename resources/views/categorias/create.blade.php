@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>


            <select name="id_categoria" id="id_categoria">
        <option value="">Seleccione una categoría</option>
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id_categoria }}">{{ $categoria->nombre }}</option>
        @endforeach
    </select>


            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
