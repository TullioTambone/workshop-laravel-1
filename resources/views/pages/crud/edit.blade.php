@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>Aggiungi una pizza</h1>
    <form action="{{ route( 'pages.update', $pizza ) }}" method="POST">

        @csrf
        @method('PUT')

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
            <label for="pizza-ingredients" class="form-label">ingredients</label>
            <input type="text" id="pizza-ingredients" name="ingredients" class="form-control">
        </div>

        <div class="form-group mb-3">
            <label for="pizza-flour_type" class="form-label">flour_type</label>
            <input type="text" id="pizza-flour_type" name="flour_type" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Modifica pizza</button>
</div>
@endsection
