<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function storeOrder(Request $request){

      // dd($request->all());

        $request->validate([
            'shipping_first_name'=>'required|max:200',
            'shipping_last_name'=>'required|max:200',
            'shipping_email'=>'required|max:200',
            'shipping_phone'=>'required|max:20',
            'address'=>'required|max:200',
            'status'=>'required|max:20',
            'post_code'=>'required|max:60'
        ]);

        $order_id= Order::insertGetId([
            'user_id'=>Auth::id(),
            'invoice_no'=>mt_rand(10000000,99999999),
            'payment_type'=>$request->payment_type,
            'total'=>$request->total,
            'created_at'=>Carbon::now()
        ]);

        $carts= Cart::where('user_ip',request()->ip())->latest()->get();
        foreach ($carts as $cart){
        OrderItem::insert([

            'order_id'=>$order_id,
            'product_id'=>$cart->product_id,
            'product_quantity'=>$cart->qty,
            'created_at'=>Carbon::now()
        ]);

        }

        Shipping::insert([
            'order_id'=>$order_id,
            'shipping_first_name'=>$request->shipping_first_name,
            'shipping_last_name'=>$request->shipping_last_name,
            'shipping_email'=>$request->shipping_email,
            'shipping_phone'=>$request->shipping_phone,
            'address'=>$request->address,
            'status'=>$request->status,
            'post_code'=>$request->post_code,
            'created_at'=>Carbon::now()


        ]);



        return redirect()->to('order/success')->with('orderComplete','Your Order Has Been Confirmed');
    }


    public function orderSuccess(){
        return view('pages.order-complete');

    }




}
