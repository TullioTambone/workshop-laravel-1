@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>NOMI PIZZE Special sto scherzando va benissimo cosi </h1>

    <ul>
        @foreach($Pizzas as $element)
        <a href="{{route('pages.show', [$element->id])}}">
            <li>{{ $element['name'] }}</li>

        </a>

        <form action="{{ route('pages.destroy', $element) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this pizza?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
        <a href="{{ route('pages.edit', $element) }}" class="btn btn-primary">modifica pizza</a>

        @endforeach

    </ul>


</div>
@endsection