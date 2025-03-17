<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;


class StockController extends Controller
{

    public function index(){
        $stock= Stock::get();
        return view('stock.index', compact('stock'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'unit_name' => 'required|string|max:255',
            'sub_unit_name' => 'required|string|max:255',
        ]);

        $stock = Stock::create([
            'user_name' => $validated['user_name'],
            'unit_name' => $validated['unit_name'],
            'sub_unit_name' => $validated['sub_unit_name'],
        ]);

        return redirect()->back();

        // return response()->json([
        //     'message' => 'Stock saved successfully!',
        //     'stock' => $stock,
        // ], 201);
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        // dd($stock);
        return view('stock.edit-stock', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'unit_name' => 'required|string|max:255',
            'sub_unit_name' => 'required|string|max:255',
        ]);

        $stock = Stock::findOrFail($id);
        $stock->update($validated);

        return redirect()->route('stock.index')->with('success', 'Stock updated successfully!');
    }

    public function delete($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
    
        return redirect()->route('stock.index')->with('success', 'Stock deleted successfully!');
    }
    
    
}
