<?php

namespace App\Http\Controllers;
use App\Models\ProductRestApi;


use Illuminate\Http\Request;

class ProductRestApiController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return ProductRestApi::all();
    }


    // Display the specified resource.
    public function show($id)
    {
        return ProductRestApi::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = ProductRestApi::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'price' => 'sometimes|required|numeric',
        ]);

        $product = ProductRestApi::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        ProductRestApi::destroy($id);
        return response()->json(null, 204);
    }
}
