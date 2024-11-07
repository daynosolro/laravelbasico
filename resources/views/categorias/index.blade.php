@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Categiruas</h1>
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Crear Categoria</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th> 
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->nombre }}</td>
                        
                        <td>
                        <a href="{{ route('categorias.edit', ['categoria' => $categoria->id_categoria]) }}">Editar</a>
                      
                        <form action="{{ route('categorias.destroy', $categoria->id_categoria) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>



                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
