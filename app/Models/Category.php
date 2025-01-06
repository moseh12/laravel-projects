<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'image',
        'subcategories',
        'custom_fields',
        'active'
    ];

    // Cast JSON columns to arrays
    protected $casts = [
        'subcategories' => 'array',
        'custom_fields' => 'array',
    ];
}
