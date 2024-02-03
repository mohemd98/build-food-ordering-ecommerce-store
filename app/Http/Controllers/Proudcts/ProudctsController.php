<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product\Product;

class ProudctsController extends Controller
{
    //

    public function singleCategory($id)
    {
        $products = Product::delect()->orderBy('id' , 'desc')->where('category_id' , $id)->get();
        return view ('products.singlecategory' , compact('products'));
    }
}
