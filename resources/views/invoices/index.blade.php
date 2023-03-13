@extends('layouts.app')

@section('head_title', 'Lista Fatture')

@section('content')
    <h1 style = "color:red"><center><u>Lista Fatture</u></center></h1>

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
            <th scope="col">Metodo Pagamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invoices as $index => $invoice)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $invoice->code }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->payment }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <center>
        <a href="{{ route('invoices.create') }}" class="btn btn-primary">Aggiungi fattura</a> 
    </center>

    <!--

    -->
@endsection