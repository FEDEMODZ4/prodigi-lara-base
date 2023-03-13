@extends('layouts.app')


@section('head_title', 'Crea nuova fattura')


@section('content')
    <h1 style="color:red"><center><u>Crea nuova fattura</u></center></h1>

    @include('partials.form-errors')

    <form method="post" action="{{ route('invoices.store') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Ordine</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Inserisci il codice della fattura...">
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" name="total" placeholder="Inserisci il totale...">
        </div>
        <div class="mb-3">
        Metodo  
        <select name="payment" id="payment" class="form-select" arial-label="Default select example">
            <option value = "" selected>Selezione metodo di pagamento</option>
            <option value = "bonifico" id="payment" name="payment">Bonifico</option>
            <option value = "carta" id="payment" name="payment">Carta</option>
        </select>
        </div>

        <center>
            <button class="btn btn-primary">Inserisci fattura</button>
        </center>
    </form>

@endsection