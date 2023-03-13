@extends('layouts.app')


@section('head_title', 'Aggiungi un nuovo cliente')


@section('content')
    <h1 style="color:red"><center><u>Aggiungi un nuovo cliente</u></center></h1>

    @include('partials.form-errors')

    <form method="post" action="{{ route('customers.store') }}">
        @csrf
        <div class="mb-3">
            <label for="firstname" class="form-label">Nome</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Inserisci il nome del cliente...">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Inserisci il cognome del cliente...">
        </div>
        <center>
            <button class="btn btn-primary">Inserisci cliente</button>
        </center>
    </form>

@endsection