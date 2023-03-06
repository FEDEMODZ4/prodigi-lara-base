<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FattureController extends Controller
{
    public function fattureView()
    {
    $titolo = 'Pagina Fatture';
    $elementi = ['fattura1', 'fattura2'];
    
    
    return view('fatture', [
        "fatture" => $elementi,
        "title" => $titolo,
    ]);
    }
}
