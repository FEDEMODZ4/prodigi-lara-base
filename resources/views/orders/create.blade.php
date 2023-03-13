@extends('layouts.app')


@section('head_title', 'Crea nuovo ordine')


@section('content')
    <h1 style="color:red"><center><u>Crea nuovo ordine</u></center></h1>

    @include('partials.form-errors')

    <form method="post" action="{{ route('orders.store') }}">
        @csrf
        <div class="mb-3">
            <label for="code" class="form-label">Ordine</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="Inserisci il nome dell ordine...">
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" name="total" placeholder="Inserisci il total...">
        </div>
        <center>
            <button class="btn btn-primary">Inserisci ordine</button>
        </center>
    </form>

@endsection