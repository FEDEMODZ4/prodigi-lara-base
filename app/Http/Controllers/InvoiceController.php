<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Invoice::all();

        return view('invoices.index', compact("invoices"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Check per non andare avanti se non c è scritto nulla// 
        $validated = $request->validate([
            "code" => 'required',
            "total" => 'required',
            "payment" => 'required',
            
        ]);
        //-------------------------//

        Invoice::create([
            "code" => $validated['code'],
            "total" => $validated['total'],
            "payment" => $validated['payment'],
        ]);

        return redirect( route('invoices.index') )->with('message', 'Fattura creata con successo');
    }
    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
