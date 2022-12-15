<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();

        return view('orders.index', compact('orders'));
    }

    public function create(){
        $products = Products::all();

        return view('orders.create', compact('products'));
    }

    public function store(Request $request){
        $order = Order::create(['user_id' => auth()->user()->id]);

        $order->products()->sync($request->product_id);

        return redirect()->route('orders');
    }

    public function show(Order $order){

        $products = $order->products();

        return view('orders.show')->with(compact('order','products'));
    }
}
