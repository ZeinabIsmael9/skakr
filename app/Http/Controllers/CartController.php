<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
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
    public function store(Request $request,$itemId)
    {
//        return $request->all();
        $user_id = $request->user()->id??User::first()->id;
//        $user_id = $request->user()->id;
       $quantity = $request->quantity??1;
        if ($cart = Cart::where('item_id', $itemId)->where('user_id', $user_id)->first()) {
            $cart->quantity = $cart->quantity + $quantity;

        }else{
            $cart = new Cart();
            $cart->item_id = $itemId;
            $cart->quantity = $quantity;
            $cart->user_id = $user_id;
        }

        $cart->save();
//        return $cart;

        return redirect()->route('shopping-cart');
    }

    public  function subtract(Request $request,$itemId){
        $user_id = $request->user()->id??User::first()->id;
        $quantity = $request->quantity??1;
        if ($cart = Cart::where('item_id', $itemId)->where('user_id', $user_id)->first()) {
            $cart->quantity = $cart->quantity - $quantity;
            if ($cart->quantity <= 0){
                $cart->delete();
            }else{
                $cart->save();
            }
        }
        return redirect()->route('shopping-cart');
    }
    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
