@extends('layouts.app')

@section('head_title', 'Lista clienti')

@section('content')
    <h1 style = "color:red"><center><u>Lista Clienti</u></center></h1>

    <div class="my-5">
    @if ( session('message') )
        <div class = "alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif
</div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Ordine</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $index => $customer)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $customer->firstname }}</td>
                    <td>{{ $customer->lastname }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <center>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Aggiungi cliente</a> 
    </center>

    <!--

    -->
@endsection