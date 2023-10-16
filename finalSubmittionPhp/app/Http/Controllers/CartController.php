<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'item_name' => 'required|string',
            'item_price' => 'required|integer',
            'item_category' => 'required|string',
            'item_count' => 'required|integer',
        ]);
    
        Cart::create($validatedData);
    
        return redirect('/dashboard')->with('flash_message', 'Item Added to Cart!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $name)
    {
        $item = Cart::find($name);
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
