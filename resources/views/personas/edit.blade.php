@extends('layouts.app')

@section('content')
    <h1>Editar Persona</h1>

    <form action="{{ route('personas.update', $persona->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('personas.form')
        <button type="submit">Actualizar</button>
    </form>
@endsection
