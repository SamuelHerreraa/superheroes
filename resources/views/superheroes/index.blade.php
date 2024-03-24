
@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Lista de Superhéroes</h2>
        <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-2">Agregar Superhéroe</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Verdadero</th>
                    <th>Nombre Superhéroe</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($superheroes as $superheroe)
                <tr>
                    <td>{{ $superheroe->id }}</td>
                    <td>{{ $superheroe->nombre_verdadero }}</td>
                    <td>{{ $superheroe->nombre_superheroe }}</td>
                    <td>
                        <img src="{{ $superheroe->foto }}" alt="{{ $superheroe->nombre_superheroe }}" style="max-width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('superheroes.show', $superheroe->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este superhéroe?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
