<?php

namespace App\Http\Controllers;

use App\Models\Deliveryperson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DeliverypersonController extends Controller
{
    public function index()
    {
        return Deliveryperson::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|string',
            'email' => 'required|email|unique:deliverypeople',
            'password' => 'required|min:6',
            'ratings' => 'nullable|integer',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        return Deliveryperson::create($validated);
    }

    public function show($id)
    {
        return Deliveryperson::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $deliveryperson = Deliveryperson::findOrFail($id);

        $validated = $request->validate([
            'name' => 'nullable|string',
            'category' => 'nullable|string',
            'email' => 'nullable|email|unique:deliverypeople,email,' . $id,
            'password' => 'nullable|min:6',
            'ratings' => 'nullable|integer',
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $deliveryperson->update($validated);
        return $deliveryperson;
    }

    public function destroy($id)
    {
        Deliveryperson::findOrFail($id)->delete();
        return response()->json(['message' => 'Deliveryperson deleted successfully.']);
    }
}
