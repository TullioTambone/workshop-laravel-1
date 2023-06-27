@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>Aggiungi una pizza</h1>
    <form action="{{ route( 'pages.store' ) }}" method="POST">

        @csrf

        <div class="form-group mb-3">
            <label for="pizza-name" class="form-label">name</label>
            <input type="text" id="pizza-name" name="name" class="form-control"
                placeholder="Inserisci il name">
        </div>

        <div class="form-group mb-3">
            <label for="pizza-type" class="form-label">Type</label>
            <input type="text" id="pizza-type" name="type" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="pizza-hydration" class="form-label">hydration</label>
            <input type="text" id="pizza-hydration" name="hydration" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="pizza-price" class="form-label">price</label>
            <input type="text" id="pizza-price" name="price" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="pizza-flour_type" class="form-label">flour_type</label>
            <input type="text" id="pizza-flour_type" name="flour_type" class="form-control">
        </div>

        <div class="form-group">
            @foreach ($ingredients as $e)
                <div class="form-check">
                    <input type="checkbox" 
                    class="form-check-input" 
                    name="ingredients[]" 
                    value="{{ $e->id }}" id="pizza-check-{{ $e->id }}">

                    <label for="pizza-check-{{ $e->id }}" class="form-check-label">{{ $e->nome }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-success">Crea pizza</button>
</div>
@endsection
