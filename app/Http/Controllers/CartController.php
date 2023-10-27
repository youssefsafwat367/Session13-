<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , $id)
    {
        $quantity = $request->validate(
            [
                "quantity"=> "required"
            ]
        ) ;
        $product = Product::find($id);
        $quantity = $quantity['quantity'] ;
        if ($product->stock < $quantity) {
            return redirect("/product/$product->id")->with('danger', "Sorry We Can't Have This quantity Now ") ;
        }
       $cart =  Cart::create([
            'user_id' => auth()->user()->id  ,
            'total' => $product->price_after_discount * $quantity
            ]
            ) ;
        CartProduct::create(
            [

                'cart_id'=> $cart->id ,
                'product_id'=> $product->id  ,
                'quantity' => $quantity ,
                'price' => $product->price_after_discount   ,
            ]
        ) ;
        return redirect("/product/$product->id")->with('success', 'The Product is Added To Cart');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
