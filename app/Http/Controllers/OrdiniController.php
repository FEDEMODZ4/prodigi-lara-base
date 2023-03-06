<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdiniController extends Controller
{
    public function ordiniView()
    {   
        $titolo = 'Pagina Ordini';
        $elementi = ['ordine1', 'ordine2', 'ordine3'];
        
        
        return view('ordini', [
            "ordini" => $elementi,
            "title" => $titolo,
        ]);
    }
}
