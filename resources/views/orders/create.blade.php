@extends('layouts.app')


@section('head_title', 'Crea nuovo ordine')


@section('content')
    <h1 style="color:red"><center><u>Crea nuovo ordine</u></center></h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ordine</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome dell ordine...">
            <label for="name" class="form-label">Total</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il total...">
        </div>
        <center>
            <button class="btn btn-primary">Inserisci ordine</button>
        </center>
    </form>

@endsection