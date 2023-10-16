@extends('items.layout')
@section('item')
 
<div class="card">
  <div class="card-header">Edit Item</div>
  <div class="card-body">
      
      <form action="{{ url('item/' .$items->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$items->id}}" />
        <label>Name</label></br>
        <input type="text" name="item_name" id="item_name" value="{{$items->item_name}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="number" name="item_price" id="item_price" value="{{$items->item_price}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
