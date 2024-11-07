@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $categoria->nombre }}</h1>
        
        <a href="{{ route('categorias.edit',['categoria' => $categoria->id_categoria] ) }}" class="btn btn-primary">Editar  </a>
    </div>
@endsection
