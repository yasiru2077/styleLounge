<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'review';
    protected $primaryKey = 'id';
    // Define the fields that can be mass-assigned
    protected $fillable = [
        'score',
        'review',
    ];
}
