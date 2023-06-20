@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>NOMI PIZZE Special sto scherzando va benissimo cosi </h1>

    <ul>
        @foreach($Pizzas as $element)
        <a href="{{route('pages.show', [$element->id])}}">
            <li>{{ $element['name'] }}</li>

        </a>

        @endforeach
        
    </ul>

</div>
@endsection
