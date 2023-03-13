@extends('layouts.app')

@section('head_title', 'Lista ordini')

@section('content')
    <h1 style = "color:red"><center><u>Lista Ordini</u></center></h1>

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
                <th>Modifica</th>
                <th>Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $index => $order)
                <tr>
                    <th>{{ $index+1 }}</th>
                    <td>{{ $order->code }}</td>
                    <td>{{ $order->total }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('orders.edit', $order) }}">Modifica</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('orders.destroy', $order) }}">
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
        <a href="{{ route('orders.create') }}" class="btn btn-primary">Aggiungi ordine</a> 
    </center>

    <!--

    -->
@endsection