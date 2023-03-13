@extends('layouts.app')

@section('head_title', 'Modifica ordine')

@section('content')
    <h1>Modifica ordine</h1>

    @include('partials.form-errors')
    
    <form method="post" action="{{ route('orders.update', $order) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="code" class="form-label">Ordine</label>
            <input type="text" class="form-control" id="code" name="code" placeholder="modifica ordine..." value="{{ $order->code }}">
        </div>
        <div class="mb-3">
            <label for="total" class="form-label">Total</label>
            <input type="text" class="form-control" id="total" name="total" placeholder="modifica total..." value="{{ $order->total }}">
        </div>                                                                                           
        <button class="btn btn-primary">Esegui modifica</button>
    </form>

@endsection