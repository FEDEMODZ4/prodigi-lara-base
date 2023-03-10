@extends('layouts.app')

@section('head_title', 'Lista ordini')

@section('content')
    <h1 style = "color:red"><center><u>Lista Ordini</u></center></h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Ordine</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $index => $order)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <center>
        <a  class="btn btn-primary">Aggiungi categoria</a> 
    </center>

    <!--
    @if ( session('message') )
        <div class = "alert alert-suucess" role="alert">
            {{session('message')}}
        </div>
    
    @endif
    -->
@endsection