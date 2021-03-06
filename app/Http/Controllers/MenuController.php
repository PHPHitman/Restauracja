<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
//    public function index()
//    {
//        $categories = Category::all();
//        $food = Product::where('category_id', 1)->get();
//        $drinks = Product::where('category_id', 2)->get();
//        $desserts = Product::where('category_id', 3)->get();
//        $alcohols = Product::where('category_id', 4)->get();
//        $recommended = Product::where('recommended', 1)->get();
//
//        return view('menu.index',[
//            'categories' => $categories,
//            'food' => $food,
//            'drinks' => $drinks,
//            'desserts' => $desserts,
//            'alcohols' => $alcohols,
//            'recommended' => $recommended
//        ]);
//
//    }

    public function edit()
    {

        $categories = Category::all();
        $food = Product::where('category_id', 1)->get();
        $drinks = Product::where('category_id', 2)->get();
        $desserts = Product::where('category_id', 3)->get();
        $alcohols = Product::where('category_id', 4)->get();
        $recommended = Product::where('recommended', 1)->get();

        return view('menu.edit',[
            'categories' => $categories,
            'food' => $food,
            'drinks' => $drinks,
            'desserts' => $desserts,
            'alcohols' => $alcohols,
            'recommended' => $recommended
        ]);

    }

    public function create()
    {
        $categories = Category::all();

        return view('menu.create',[
            'categories' => $categories,

        ]);
    }

    public function editProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();

        return view('menu.create',[
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function store()
    {
        //Walidacja danych
        $data=request()->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price'=>'required',
            'image' => ['required','image']
        ]);

        $imagePath=request('image')->store('uploads','public');
        $data['image']=$imagePath;
        Product::create($data);
        return redirect('/edit')->with('added', 'Produkt zosta?? dodany!');;
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/edit')->with('deleted', 'Produkt zosta?? usuni??ty!');
    }

    public function addRecommended($id)
    {
        Product::where('id',$id)
            ->update(array('recommended' => 1));
        return redirect('/edit')->with('recommend', 'Produkt zosta?? dodany do rekomendowanych!');
    }

    public function deleteRecommended($id)
    {
        Product::where('id',$id)
            ->update(array('recommended' => 0));
        return redirect('/edit')->with('deleteRecommended', 'Produkt zosta?? usuni??ty z rekomendowanych!');
    }
}
