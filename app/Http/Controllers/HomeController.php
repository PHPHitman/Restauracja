<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function index()
    {
        $categories = Category::all();
        $food = Product::where('category_id', 1)->get();
        $drinks = Product::where('category_id', 2)->get();
        $desserts = Product::where('category_id', 3)->get();
        $alcohols = Product::where('category_id', 4)->get();
        $recommended = Product::where('recommended', 1)->get();

        return view('menu.index',[
            'categories' => $categories,
            'food' => $food,
            'drinks' => $drinks,
            'desserts' => $desserts,
            'alcohols' => $alcohols,
            'recommended' => $recommended
        ]);

    }



}
