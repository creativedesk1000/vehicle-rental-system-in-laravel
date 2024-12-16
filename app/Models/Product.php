<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Add fillable attributes
    protected $fillable = [
        'name',     // Allow mass assignment for 'name'
        'price',    // Make sure to include other attributes as needed
        'detail',   // Include any other fields you want to allow
    ];
}