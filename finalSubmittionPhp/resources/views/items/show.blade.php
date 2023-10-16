@extends('items.layout')
@section('item')
 
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $items->item_name }}</h5>
        <p class="card-text">Address : {{ $items->item_price }}</p>
        
  </div>
       
    </hr>
  
  </div>
</div>