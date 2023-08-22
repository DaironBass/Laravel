@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Crear Cliente</h1>
      
      <form action="{{ route('client.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" placeholder="Nombre del cliente">
            <p class="form-text">Escriba el nombre del cliente</p>
        </div>

        <div class="mb-3">
            <label for="due" class="form-label">Nombre</label>
            <input type="number" name="name" class="form-control" placeholder="Saldo del cliente" step="0.01">
            <p class="form-text">Escriba el Saldo del cliente</p>
        </div>

        <div class="mb-3">
            <label for="comments" class="form.label">Comentarios</label>
            <textarea name="comments" cols="30" rows="4" class="form-control"></textarea>
            <p class="form-text">Escriba algunos comentarios</p>
        </div>

        <button type="submit" class="btn btn-info">Guardar cliente</button>
        
    </div>
@endsection