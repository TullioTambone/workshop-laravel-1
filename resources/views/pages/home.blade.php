@extends('layout.app')

@section('content')

<div class="container p-5">
    <div class="table-responsive">
        <table class="table table-hover" id="table">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">type</th>
                    <th scope="col">hydration</th>
                    <th scope="col">price</th>
                    <th scope="col">ingredients</th>
                    <th scope="col">flour_type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pizzas as $key => $element)
                <tr class="">
                    <td>{{ $element['name'] }}</td>
                    <td>{{ $element['type'] }}</td>
                    <td>{{ $element['hydration'] }}%</td>
                    <td>{{ $element['price'] }},00 &euro;</td>
                    <td>{{ $element['ingredients'] }}</td>
                    <td>{{ $element['flour_type'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
@endsection