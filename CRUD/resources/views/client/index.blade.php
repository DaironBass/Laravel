@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Listado de clientes</h1>
      <a href="{{ route('client.create') }}" class="btn btn-primary">Crear cliente</a>

      @if (Session::has('mensaje'))
          <div class="alert alert-info my-5">
            {{ Session::get('mensaje') }}
          </div>
      @endif

      <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Saldo</th>
            <th>Acciones</th>
        </thead>
        <tbody>
          @forelse ($clients as $details)
              <tr>
                  <td>{{ $details->name }}</td>
                  <td>{{ $details->due }}</td>
                  <td>Editar - Eliminar</td>
              </tr>  
              
          @empty
              
          @endforelse
      
        </tbody>
      </table>
    </div>
@endsection