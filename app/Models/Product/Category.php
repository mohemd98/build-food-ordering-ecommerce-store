<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table = "categories";

    protected $fillale = [
        'name',
        'image'
    ];
    public  $timestamps = true;


}
