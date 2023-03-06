@extends('layouts.app')

@section('head_title', 'Fatture')



@section('content')
<div style="color:red">
        <h1>{{ $title }} </h1>
    </div>

    <ol>
        @foreach($fatture as $fattura)
            <li>{{ $fattura }}</li>
        @endforeach
    </ol>
@endsection