<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderItem;
use App\Shipping;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class DeliveryShowController extends Controller
{
    //

    public function orderView()
    {

        $order= Order::latest()->get();

        return view('delivery.home.view',compact('order'));
    }

    public function details($id)
    {


        $orderItems= OrderItem::where('order_id',$id)->latest()->get();
        $shipping= Shipping::where('order_id',$id)->latest()->first();

        return view('delivery.customer',compact('orderItems','shipping'));
    }
}
