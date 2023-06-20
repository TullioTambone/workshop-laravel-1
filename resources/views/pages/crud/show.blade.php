@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>Singole PIZZE Special sto scherzando va benissimo cosi </h1>


    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $singolaPizza->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $singolaPizza->type }}</h6>
            <p class="card-text">Percentuale idratazione {{ $singolaPizza->hydration }}%</p>
            <p> Prezzo {{ $singolaPizza->price }}$</p>
            <a href="#" class="card-link">Modifica</a>
            <a href="#" class="card-link">Elimina</a>
        </div>
    </div>
</div>
@endsection
