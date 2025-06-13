<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index()
    {
        return Customer::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'categoria' => 'required|in:ADM,entregador,cliente comum',
            'email' => 'required|email|unique:customers',
            'senha' => 'required|string|min:6',
            'pedidos' => 'integer',
            'avaliacoes' => 'integer',
        ]);

        $validated['senha'] = Hash::make($validated['senha']);

        $customer = Customer::create($validated);

        return response()->json($customer, 201);
    }

    public function show($id)
    {
        return Customer::findOrFail($id);
    }

    public function edit(Customer $customer)
    {
        return view('customer_edit', ['customer' => $customer]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'string|max:255',
            'categoria' => 'in:ADM,entregador,cliente comum',
            'email' => 'email|unique:customers,email,' . $id,
            'senha' => 'nullable|string|min:6',
            'pedidos' => 'integer',
            'avaliacoes' => 'integer',
        ]);

        if (!empty($validated['senha'])) {
            $validated['senha'] = Hash::make($validated['senha']);
        } else {
            unset($validated['senha']);
        }

        $customer->update($validated);

        return response()->json($customer);
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(null, 204);
    }
}
