<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class fontendController extends Controller
{
    //

    public function index(){

        $products= Product::latest()->get();
        $categories=Category::latest()->get();
        return view('pages.index',compact('products','categories'));
    }

    public function catWisePro($cat_id)
    {
        $products= Product::where('category_id',$cat_id)->latest()->paginate(2);
        $categories= Category::where('status',1)->latest()->get();
        return view('pages.cat_product',compact('products','categories'));
    }

    public function searching(Request $req)
    {


       $products=Product::where('product_name','like','%'.$req->input('query').'%')->get();

       return view('pages.allsearch.search',compact('products'));
    }

}
