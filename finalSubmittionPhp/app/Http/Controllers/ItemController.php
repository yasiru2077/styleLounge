<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
       $items = Item::all();
       return view ('items.index')->with('items',$items);
       
    }
    
   

    public function create()
    {
        return view('items.create');
    }
   
    public function store(Request $request)
    {
        $input = $request->all();
        Item::create($input);
        return redirect('item')->with('flash_message', 'Item Addedd!');  
    }
    
    public function show($id)
    {
       $item = Item::find($id);
        return view('items.show')->with('items',$item);
    }
    
    public function edit($id)
    {
       $item = Item::find($id);
        return view('items.edit')->with('items',$item);
    }
  
    public function update(Request $request, $id)
    {
       $item = Item::find($id);
        $input = $request->all();
       $item->update($input);
        return redirect('item')->with('flash_message', 'Item Updated!');  
    }
   
    public function destroy($id)
    {
        Item::destroy($id);
        return redirect('item')->with('flash_message', 'Item deleted!');  
    }

}
