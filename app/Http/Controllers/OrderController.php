<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
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
    public function store(Request $request)
    {
        $userId = auth()->user()->id??User::first()->id;
        $cart = Cart::where('user_id', $userId)->with('item.product', 'item.color', 'item.size')->get();
        $subTotal = $cart->sum(function ($item) {
            return $item->item->price * $item->quantity;
        });
        $shipping = 70;
        $discount = 0;
        $total = $subTotal + $shipping - $discount;

        $order = new Order();
        $order->user_id = $userId;
        $order->paid = 0;
        $order->sub_total = $subTotal;
        $order->total = $total;
        $order->save();


        foreach ($cart as $cartItem) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->item_id = $cartItem->item_id;
            $orderDetail->quantity = $cartItem->quantity;
            $orderDetail->amount = $cartItem->item->price * $cartItem->quantity;
            $orderDetail->save();
        }

        $cart->each->delete();

//        $userId = auth()->id();
//        $cart = Cart::where('user_id', $userId)->with('item.product', 'item.color', 'item.size')->get();
//        $subTotal = $cart->sum(function ($item) {
//            return $item->item->price * $item->quantity;
//        });
//        $shipping = 70;
//        $discount = 0;
//        $total = $subTotal + $shipping - $discount;

        return redirect()->route('client-data.show', ['orderId' => $order->id]);
//    return redirect()->route('client-data.show', compact('cart', 'subTotal', 'shipping', 'discount', 'total'))->with('success', 'Order has been placed successfully.');

    }

    public function storeCutom(request $request)
    {
//return     $image = $request->file('image');
//        dd($request);
        $userId = auth()->user()->id??User::first()->id;
        $subTotal = $request->sub_total;
        $shipping = $request->shipping;
        $discount = $request->discount;
        $total = $request->total;

        $order = new Order();
        $order->user_id = $userId;
        $order->paid = 0;
        $order->sub_total = $subTotal;
        $order->total = $total;
        $order->save();

        $orderDetail = new OrderDetail();
        $orderDetail->order_id = $order->id;
        $orderDetail->is_custom = 1;
        $orderDetail->quantity = 1;
        $orderDetail->amount = $subTotal;
//    $orderDetail->design_id = $request->design_id;
        $orderDetail->save();
        if ($request->hasFile('image')) {
            $orderDetail->addMediaFromRequest('image')->toMediaCollection('designs');

//            return $orderDetail;
        }
        return redirect()->route('client-data.show', ['orderId' => $order->id]);
//        return redirect()->route('index')->with('success', 'Order has been placed successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
