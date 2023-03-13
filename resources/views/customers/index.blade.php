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
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th>Modifica</th>
                <th>Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $index => $customer)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $customer->firstname }}</td>
                    <td>{{ $customer->lastname }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('customers.edit', $customer) }}">Modifica</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('customers.destroy', $customer) }}">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger confirm_delete">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        $('.confirm_delete').click(e => {
            if (!confirm('Sei sicuro di cancellare?')) {
                e.preventDefault();
            }
        });
    </script>

    <center>
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Aggiungi cliente</a> 
    </center>

@endsection