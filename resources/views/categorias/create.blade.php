@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>

        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div> 
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
