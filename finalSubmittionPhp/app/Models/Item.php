<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items'; // Match the table name in the migrations
    protected $primaryKey = 'id'; // Match the primary key in the migrations
    protected $fillable = ['item_name', 'item_price','item_category','image'];
}
