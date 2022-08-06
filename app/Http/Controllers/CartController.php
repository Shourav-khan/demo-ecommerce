<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
        public function addToCart(Request $request,$product_id)
        {

            $check= Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();
            if($check){
                Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->increment('qty');
                return redirect()->back()->with('cart','Product Successfully added on Cart');
            }else{

                Cart::insert([


                    'product_id'=>$product_id,
                    'qty'=>1,
                    'price'=>$request->price,
                    'user_ip'=>request()->ip()

                ]);
                return redirect()->back()->with('cart','Product successfully added on Cart');

            }


        }

        public function cartPage(){

            $carts= Cart::where('user_ip',request()->ip())->latest()->get();
            $total= Cart::all()->where('user_ip',request()->ip())->sum

            (function ($t){

                return   $t->price * $t->qty;

            });
            return view('pages.cart',compact('carts','total'));
        }

        public function destroy($cart_id)
        {
            Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();
            return redirect()->back()->with('cart_delete','Product cart_removed');
        }

        public function quantityUpdate(Request $request,$cart_id){

            Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
                'qty'=> $request->qty,
            ]);

            return redirect()->back()->with('cart_update','Quantity Updated');

        }

}
