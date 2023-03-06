@extends('layouts.app')

@section('head_title', 'Ordini')



@section('content')
    <div style="color:red">
        <h1>{{ $title }} </h1>
    </div>

    <ul>
        @foreach($ordini as $ordine)
            <li>{{ $ordine }}</li>
        @endforeach
    </ul>
@endsection