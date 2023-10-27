<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Cart;
use Illuminate\Http\Request;

class Track_orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches =  Branch::all() ;
        if (auth()->user() != NULL) {
            $carts = Cart::where('user_id', '=', auth()->user()->id)->where('status', '=', 'قيد التنفيذ')->get();
            return view('front.track-order' , ['branches'=>$branches , 'carts'=> $carts]) ;
        } else {
            return view('front.track-order', ['branches' => $branches]);
        }

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
    public function store(Request $request)
    {
        //
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
