<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
        public function index(){

            $catagories= Category::latest()->get();
            return view('admin.category.index',compact('catagories'));
        }

        public function storing(Request $request){
            $request->validate([
                'category_name'=>'required|unique:categories,category_name'
            ]);

            Category::insert([
                'category_name'=> $request->category_name,
                'created_at'=>Carbon::now()
            ]);

            return redirect()->back()->with('success','category added successfully');

        }

        public function edit($id){
        $category=Category::all();
        $categories=$category->find($id);
        return view('admin.category.edit',compact('categories'));

        }

    public function update(Request $request){

        $id= $request->id;

        Category::find($id)->update([
            'category_name'=> $request->category_name,
            'update_at'=>Carbon::now()
        ]);

        return redirect()->route('admin.category')->with('success','category Update successfully');
    }

    public function delete($id){

        Category::find($id)->delete();
        return redirect()->back()->with('Delete','Category Deleted ');

    }

}
