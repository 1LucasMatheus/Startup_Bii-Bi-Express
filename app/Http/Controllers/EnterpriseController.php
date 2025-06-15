<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnterpriseController extends Controller
{
    public function index()
    {
        return Enterprise::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'email' => 'required|email|unique:enterprises',
            'senha' => 'required|string|min:6',
            'itens' => 'nullable|integer',
            'entregadores' => 'nullable|integer',
            'avaliacoes' => 'nullable|integer',
        ]);

        $validated['senha'] = Hash::make($validated['senha']);

        return Enterprise::create($validated);
    }

    public function show($id)
    {
        return Enterprise::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $enterprise = Enterprise::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'nullable|string',
            'email' => 'nullable|email|unique:enterprises,email,' . $id,
            'senha' => 'nullable|string|min:6',
            'itens' => 'nullable|integer',
            'entregadores' => 'nullable|integer',
            'avaliacoes' => 'nullable|integer',
        ]);

        if (!empty($validated['senha'])) {
            $validated['senha'] = Hash::make($validated['senha']);
        } else {
            unset($validated['senha']);
        }

        $enterprise->update($validated);

        return $enterprise;
    }

    public function destroy($id)
    {
        Enterprise::findOrFail($id)->delete();

        return response()->json(['message' => 'Enterprise deletado com sucesso.']);
    }
}
