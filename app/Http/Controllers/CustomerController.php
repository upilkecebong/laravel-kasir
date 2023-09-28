<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('kasir.modal-nama');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $customer = new Customer([
            'nama' => $request->input('nama'),
        ]);

        $customer->save();
        return redirect()->route('customer.index')->with('success', 'Data pelanggan berhasil disimpan!');

    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
