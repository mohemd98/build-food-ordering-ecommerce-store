<?php

namespace App\Http\Controllers\Proudcts;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Cart;

use Auth;
use Redirect;
use Session ;


class ProudctsController extends Controller
{
    //

    public function singleCategory($id)
    {
        $products = Product::select()->orderBy('id', 'desc')->where('category_id', $id)->get();
        return view('products.singlecategory', compact('products'));
    }

    public function singleProduct($id)
    {

        $product = Product::find($id);

        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $id)->get();
        $checkInCart = Cart::where('pro_id', $id)->where('user_id', Auth::user()->id)->count();

        return view('products.singleproduct', compact('product', 'relatedProducts', 'checkInCart'));

    }

    public function shop()
    {

        $categories = Category::select()->orderBy('id', 'desc')->get();

        $mostWanted = Product::select()->orderBy('name', 'desc')->take(5)->get();
        $vegetables = Product::select()->where('category_id', '=', 3)->orderBy('id', 'desc')->take(5)->get();
        $meats = Product::select()->where('category_id', '=', 1)->orderBy('id', 'desc')->take(5)->get();
        $fishes = Product::select()->where('category_id', '=', 2)->orderBy('id', 'desc')->take(5)->get();
        $fruits = Product::select()->where('category_id', '=', 4)->orderBy('id', 'desc')->take(5)->get();


        return view('products.shop', compact('categories', 'mostWanted', 'vegetables', 'meats', 'fishes', 'fruits'));

    }

    public function addToCart(Request $request)
    {

        $addCart = Cart::create([
            "name" => $request->name,
            "price" => $request->price,
            "qty" => $request->qty,
            "image" => $request->image,
            "pro_id" => $request->pro_id,
            "user_id" => Auth::user()->id,
            "subtotal" => $request->price * $request->qty,


        ]);

        if ($addCart) {
            return Redirect::route("single.product", $request->pro_id)->with(['success' => 'product added to cart successfully']);

        }


    }


    public function cart()
    {

        $cartProducts = Cart::select()->where('user_id', Auth::user()->id)->get();

        $subtotal = Cart::where('user_id', Auth::user()->id)->sum('subtotal');
        return view('products.cart', compact('cartProducts', 'subtotal'));

    }

    public function deleteFromCart($id)
    {

        $deleteCart = Cart::find($id);
        $deleteCart->delete();
        if ($deleteCart) {
            return Redirect::route("products.cart")->with(['delete' => 'product deleted from cart successfully']);

        }


    }

    public function prepareCheckout(Request $request)
    {
        $price=$request->price;
        $value=Session::put('value' , $price);
        $newPrice = Session::get($value);

        if($newPrice > 0){
            return Redirect::route('products.checkout');
        }


    }

    public function checkout()
    {

        echo 'welcom';

    }
}
