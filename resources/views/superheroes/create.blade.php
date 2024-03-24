@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agregar Superhéroe</h2>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre_verdadero">Nombre Verdadero:</label>
            <input type="text" name="nombre_verdadero" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre_superheroe">Nombre Superhéroe:</label>
            <input type="text" name="nombre_superheroe" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="foto">URL de la Foto:</label>
            <input type="text" name="foto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="informacion_adicional">Información Adicional:</label>
            <textarea name="informacion_adicional" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection