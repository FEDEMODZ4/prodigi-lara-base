<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function clientiView()
    {   
        $titolo = 'Pagina Clienti';

        $nomeNonPassato = ['Mario', 'Luigi', 'Leonardo'];
        $cognomeNonPassato = ['Rossi ', 'Bianchi', 'Giampinho'];


        //echo 'pagina di test';
        return view('clienti', [
            "nomi" => $nomeNonPassato,
            "cognomi" => $cognomeNonPassato,
            "title" => $titolo,
        ]);
    }
}
