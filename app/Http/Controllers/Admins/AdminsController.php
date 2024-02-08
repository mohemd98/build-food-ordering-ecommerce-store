<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Models\Product\Order;
use App\Models\Admin\Admin;
use App\Models\Product\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminsController extends Controller
{
    public function viewlogin()
    {
        return view('admins.login');

    }
    public function checkLogin(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {

            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $productsCount =Product::select()->count();
        $OrderCount =Order::select()->count();
        $CategoryCount =Category::select()->count();
        $AdminCount =Admin::select()->count();

        return view('admins.index' , compact('productsCount' , 'OrderCount' , 'CategoryCount' , 'AdminCount'));

    }

    public function displayAdmins()
    {
        $allAdmins =Admin::all();

        return view('admins.alladmins' , compact('allAdmins' , ));

    }

    public function createAdmins()
    {

        return view('admins.createAdmin' );

    }

    public function storeAdmins(Request $request)
    {

        $storeAdmins=Admin::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        if ($storeAdmins) {
            return Redirect::route("admins.all")->with(['success' => 'admin added  successfully']);

        }


    }

}
