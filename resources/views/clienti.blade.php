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

    <table>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                  </tr>
                </thead>
    
                <tbody>
                    @foreach($nomi as $nome)
                        <tr>
                            <td>{{ $nome }}</td>
                            <td>{{ $cognome }}</td>
                        </tr>   
                    @endforeach
                </tbody>
          </table>

@endsection