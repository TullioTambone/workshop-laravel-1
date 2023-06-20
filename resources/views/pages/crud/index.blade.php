@extends('layout.app')

@section('content')

<div class="container p-5">
    <h1>NOMI PIZZE Special sto scherzando va benissimo cosi </h1>

    <ul>
        @foreach($pizzas as $key => $element)

        <li>{{ $element['name'] }}</li>

        @endforeach
    </ul>

</div>
@endsection
