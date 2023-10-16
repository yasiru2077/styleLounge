<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartFunction extends Model
{
    use HasFactory;
    protected $table = 'cartfunctions'; // Specify the correct table name
    protected $fillable = [
        'name',
        'total_cost',
        'item_count',
    ];
}
