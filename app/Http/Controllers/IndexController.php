<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders =  Slider::where('status' , '=' , 'appear')->get() ;
        $products = Product::where('status' , '=' , 'appear')->get() ;
        $new_products = Product::where('status' , '=' , 'appear')->orderBy('created_at')->take(10)->get() ;
        $categories = Category::all() ;
        $branches =  Branch::all() ;
        if (auth()->user() != NULL) {
            $carts = Cart::where('user_id' , '=' , auth()->user()->id)->where('status', '=', 'قيد التنفيذ')->get() ;
            return view('front.home' , ['sliders'=>$sliders , 'products'=> $products , 'categories'=> $categories   , 'new_products'=>$new_products , 'branches'=>$branches  , 'carts'=>$carts]) ;
        }
    else{
            return view('front.home', ['sliders' => $sliders, 'products' => $products, 'categories' => $categories, 'new_products' => $new_products, 'branches' => $branches]);

    }
    }

}
