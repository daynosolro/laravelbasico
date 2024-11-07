@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Categoria</h1>

        <form action="{{ route('categorias.update',  ['categoria' => $categoria->id_categoria] ) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
            </div>

            
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </form>
    </div>
@endsection
