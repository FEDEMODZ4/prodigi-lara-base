@extends('layouts.app2')

@section('head_title', 'Clienti')



@section('content')
    <div style="color:red">
        <h1>{{ $title }}</h1>
    </div>

    <table>
        <tr>
            <td> <b>Nome</b> </td>
            <td> <b>Cognome</b> </td>
        </tr>
        <tr>
            @foreach($nomi as $nome)
                <td>{{ $nome }}</td>
            @endforeach

            @foreach($cognomi as $cognome)
                <td>{{ $cognome }}</td>
            @endforeach
        </tr>
    </table>

@endsection