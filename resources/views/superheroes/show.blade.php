
@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Detalles del Superhéroe</h2>
        <div class="card">
            <div class="card-body">
                <p><strong>Nombre Verdadero:</strong> {{ $superheroe->nombre_verdadero }}</p>
                <p><strong>Nombre Superhéroe:</strong> {{ $superheroe->nombre_superheroe }}</p>
                <p><strong>Foto:</strong></p>
                <img src="{{ $superheroe->foto }}" alt="{{ $superheroe->nombre_superheroe }}" style="max-width: 300px;">
                <p><strong>Información Adicional:</strong> {{ $superheroe->informacion_adicional }}</p>
            </div>
        </div>
        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
@endsection