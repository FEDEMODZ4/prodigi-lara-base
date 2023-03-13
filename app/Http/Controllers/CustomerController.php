<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customers.index', compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Check per non andare avanti se non c è scritto nulla// 
        $validated = $request->validate([
            "firstname" => 'required',
            "lastname" => 'required',
            
        ]);
        //-------------------------//

        Customer::create([
            "firstname" => $validated['firstname'],
            "lastname" => $validated['lastname'],
        ]);

        return redirect( route('customers.index') )->with('message', 'Cliente aggiunto con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            "customer" => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $validated = $request->validate([
            "firstname" => 'required',
            "lastname" => 'required',
            
        ]);

        $customer->firstname = $validated['firstname'];
        $customer->lastname = $validated['lastname'];
        $customer->save();

        return redirect( route('customers.index') )->with('message', 'Cliente modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect( route('customers.index') )->with('message', 'Cliente eliminato con successo');
    }
}
