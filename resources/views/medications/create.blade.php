@extends('layouts.app')

@section('title', 'Agregar Medicamento')

@section('content')
    <h1>Agregar Medicamento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Errores:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('medications.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre *</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="lote" class="form-label">Lote</label>
            <input type="text" name="batch" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_caducidad" class="form-label">Fecha de caducidad *</label>
            <input type="date" name="expiration_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad *</label>
            <input type="number" name="quantity" class="form-control" required min="0">
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('medications.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection