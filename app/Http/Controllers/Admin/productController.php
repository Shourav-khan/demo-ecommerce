<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Symfony\Component\Console\Input\Input;


class productController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addingProduct(){

        $categories=Category::latest()->get();
        return view('admin.product.added',compact('categories'));

    }

    public function storeProduct(Request $request){

        $request->validate([

            'category_id'=>'required|max:255',
            'product_name'=>'required|max:255',
            'product_quantity'=>'required|max:255',
            'p_description'=>'required|max:255',
            'price'=>'required|max:255',
            'product_image'=>'required|mimes:jpg,jpeg,png,gif'



        ],[
            'category_id.required'=>'select category name'

        ]);


        $img= $request->file('product_image');
        $name_gen=hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
      Image::make($img)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
        $img_url='fontend/img/product/upload/'.$name_gen;

        Product::insert([

           'category_id'=>$request->category_id,
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->p_description,
            'price'=>$request->price,
            'product_image'=>$img_url,
            'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('success','product Added');

    }

    public function manageProduct()
    {
        $products=Product::orderBy('id','DESC')->get();
        return view('admin.product.manage',compact('products'));
    }

    public function editProduct($product_id)
    {
        $product = Product::findOrFail($product_id);
        $categories= Category::latest()->get();
        return view('admin.product.edit',compact('product','categories'));
    }

    public function updateProduct(Request $request)
    {
        $product_id=$request->id;
        Product::findOrFail($product_id)->update([

            'category_id'=>$request->category_id,
            'product_name'=>$request->product_name,
            'product_quantity'=>$request->product_quantity,
            'product_description'=>$request->p_description,
            'price'=>$request->price,

            'updated_at'=>Carbon::now()
        ]);
        return redirect()->route('manage-products')->with('success','product updated');
    }

    public function deletePro($id)
    {
        $image=Product::findOrFail($id);
        $pic=$image->product_image;
        unlink($pic);
        Product::findOrFail($id)->delete();
        return redirect()->back()->with('delete','product delete successfully');
    }


}
