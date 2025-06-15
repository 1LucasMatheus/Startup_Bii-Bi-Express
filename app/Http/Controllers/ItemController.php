<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'category' => 'required|in:delivery,pickup',
            'size_type' => 'required|in:small,large',
            'fragile_type' => 'required|in:fragile,not fragile',
            'status' => 'required|in:accepted,delivered,pending',
        ]);

        return Item::create($validated);
    }

    public function show($id)
    {
        return Item::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $validated = $request->validate([
            'name' => 'nullable|string',
            'category' => 'nullable|in:delivery,pickup',
            'size_type' => 'nullable|in:small,large',
            'fragile_type' => 'nullable|in:fragile,not fragile',
            'status' => 'nullable|in:accepted,delivered,pending',
        ]);

        $item->update($validated);
        return $item;
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return response()->json(['message' => 'Item deleted successfully.']);
    }
}
