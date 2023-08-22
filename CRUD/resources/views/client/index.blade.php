@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Listado de clientes</h1>
      <a href="{{ route('client.create') }}" class="btn btn-primary">Crear cliente</a>

      <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Saldo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>felinoHost</td>
                <td>0.0</td>
                <td>Editar - Eliminar</td>
            </tr>
        </tbody>
      </table>
    </div>
@endsection