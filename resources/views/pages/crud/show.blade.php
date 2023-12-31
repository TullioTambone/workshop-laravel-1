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

            <div>
                ingredients:
                @if ($singolaPizza->ingredients)
                    @foreach($singolaPizza->ingredients as $e)
                        {{$e->nome}}
                    @endforeach
                @endif 
            </div>

            <a href="" class="card-link">Modifica</a>
            <form action="{{ route('pages.destroy', $singolaPizza) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pizza?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
</div>
@endsection