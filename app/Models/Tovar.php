<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'Availability',
        'Price',
        'description',
        'Short_description',
        'Category',
        'Subcategory',
        'Size',
        'Type of material',
        'photo',
    ];

    

}
