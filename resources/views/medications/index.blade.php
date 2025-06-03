@extends('layouts.app')

@section('title', 'Lista de Medicamentos')

@section('content')
    <h1>Medicamentos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('medications.index') }}" class="row mb-3">
        <div class="col-md-8">
            <input type="text" name="search" class="form-control" placeholder="Buscar por nombre o lote" value="{{ request('search') }}">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </form>

    <a href="{{ route('medications.create') }}" class="btn btn-primary mb-3">Agregar nuevo</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Lote</th>
                <th>Fecha de caducidad</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($medications as $medication)
                <tr>
                    <td>{{ $medication->name }}</td>
                    <td>{{ $medication->batch ?? '-' }}</td>
                    <td>{{ $medication->expiration_date }}</td>
                    <td>{{ $medication->quantity }}</td>
                    <td>
                        <a href="{{ route('medications.edit', $medication) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('medications.destroy', $medication) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar este medicamento?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5" class="text-center">No hay medicamentos registrados.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection