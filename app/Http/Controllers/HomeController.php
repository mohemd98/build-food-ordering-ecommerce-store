<?php

namespace App\Http\Controllers;

use App\Models\Product\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories= Category::select()->orderBy('id', 'desc')->get();
        return view('home' , compact('categories'));
    }
}
