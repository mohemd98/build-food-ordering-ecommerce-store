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
use File;

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

            return redirect()->route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }

    public function index()
    {
        $productsCount = Product::select()->count();
        $OrderCount = Order::select()->count();
        $CategoryCount = Category::select()->count();
        $AdminCount = Admin::select()->count();

        return view('admins.index', compact('productsCount', 'OrderCount', 'CategoryCount', 'AdminCount'));

    }

    public function displayAdmins()
    {
        $allAdmins = Admin::all();

        return view('admins.alladmins', compact('allAdmins',));

    }

    public function createAdmins()
    {

        return view('admins.createAdmin');

    }

    public function storeAdmins(Request $request)
    {

        $storeAdmins = Admin::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);

        if ($storeAdmins) {
            return Redirect::route("admins.all")->with(['success' => 'admin added  successfully']);

        }


    }

    public function displayCategories()
    {
        $allcategories = Category::select()->orderBy('id', 'desc')->get();
        return view('admins.allcategories', compact('allcategories'));

    }


    public function createCategories()
    {

        return view('admins.createcategories');


    }

    public function storeCategories(Request $request)
    {

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeCategory = Category::create([
            'icon' => $request->icon,
            'name' => $request->name,
            'image' => $myimage,
        ]);

        if ($storeCategory) {
            return Redirect::route("categories.all")->with(['success' => 'create catecory  successfully']);
        }

    }

    public function editCategories($id)
    {
        $category = Category::find($id);
        return view('admins.editcategories', compact('category'));

    }


    public function updateCategories(Request $request, $id)
    {

        $catecory = Category::find($id);

        $catecory->update($request->all());

        if ($catecory) {
            return Redirect::route("categories.all")->with(['update' => 'update catecory  successfully']);
        }

    }


    public function deleteCategories($id)
    {

        $catecory = Category::find($id);

        if (File::exists(public_path('assets/images/' . $catecory->image))) {
            File::delete(public_path('assets/images/' . $catecory->image));
        } else {
            //dd('File does not exists.');
        }

        $catecory->delete();

        if ($catecory) {
            return Redirect::route("categories.all")->with(['delete' => 'delete catecory  successfully']);
        }

    }

    public function displayProducts()
    {
        $allproducts = Product::select()->orderBy('id', 'desc')->get();
        return view('admins.allproducts', compact('allproducts'));

    }

    public function createProducts()
    {

        $allcatecory = Category::all();

        return view('admins.createProducts', compact('allcatecory'));


    }


    public function storeProducts(Request $request)
    {

        $destinationPath = 'assets/images/';
        $myimage = $request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath), $myimage);

        $storeProducts = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'exp_date' => $request->exp_date,
            'image' => $myimage,
        ]);

        if ($storeProducts) {
            return Redirect::route("products.all")->with(['success' => 'added product  successfully']);
        }

    }

    public function deleteProducts($id)
    {

        $product = Product::find($id);

        if (File::exists(public_path('assets/images/' . $product->image))) {
            File::delete(public_path('assets/images/' . $product->image));
        } else {
            //dd('File does not exists.');
        }

        $product->delete();

        if ($product) {
            return Redirect::route("products.all")->with(['delete' => 'delete $product  successfully']);
        }

    }


    public function displayOrders()
    {
        $allorders = Order::select()->orderBy('id', 'desc')->get();
        return view('admins.allorders', compact('allorders'));

    }
    public function editOrders($id)
    {
        $ordser= Order::find($id);
        return view('admins.editorders', compact('ordser'));

    }

    public function updateOrders(Request $request, $id)
    {

        $order = Order::find($id);

        $order->update($request->all());

        if ($order) {
            return Redirect::route("orders.all")->with(['update' => 'update order  successfully']);
        }

    }


}
