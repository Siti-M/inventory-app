<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with(['category', 'unit', 'supplier'])->get();
        return response()->json($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'unit_id' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::finOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'unit_id' => 'required',
            'stock' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product->update($validated);
        return response()->json($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::finOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}
