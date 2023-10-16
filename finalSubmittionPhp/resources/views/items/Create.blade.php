@extends('items.layout')
@section('item')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('item') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="item_name" id="item_name" class="form-control"></br>
        <label>Price</label></br>
        <input type="number" name="item_price" id="item_price" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="item_category" id="item_category" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="image" id="image" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
