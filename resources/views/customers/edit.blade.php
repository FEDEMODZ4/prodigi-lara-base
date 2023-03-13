@extends('layouts.app')

@section('head_title', 'Modifica ordine')

@section('content')
    <h1>Modifica ordine</h1>

    @include('partials.form-errors')
    
    <form method="post" action="{{ route('customers.update', $customer) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="firstname" class="form-label">Nome</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="modifica nome..." value="{{ $customer->firstname }}">
        </div>
        <div class="mb-3">
        <label for="lastname" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="modifica total..." value="{{ $customer->lastname }}">
        </div>                                                                                           
        <button class="btn btn-primary">Esegui modifica</button>
    </form>

@endsection