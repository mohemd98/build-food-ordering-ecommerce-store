<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    protected $fillable  = [
        'name',
        'price',
        'qty',
        'image',
        'pro_id',
        'subtotal' ,
        'user_id',
    ];
    public  $timestamps = true;
}
