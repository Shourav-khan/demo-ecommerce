<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\shipState;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class shippingAreaController extends Controller
{
    //

    public function stateCreate(){

        $states= shipState::orderBy('id','DESC')->get();
        return view('admin.ship-state.create',compact('states'));
    }

    public function stateStore(Request $request){
        $request->validate([
            'state_name'=>'required'
        ],[
            'state_name.required'=>'select state'
        ]);

        shipState::insert([
            'state_name'=>$request->state_name,
            'created_at'=>Carbon::now(),
        ]);

        $notification=array(
            'messsage'=>'added success',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function stateEdit($id)
    {
        $states= shipState::findOrFail($id);


        return view('admin.ship-state.edit',compact('states'));
    }

    public function stateUpdate(Request $request)
    {
        $state_id=$request->id;
        $request->validate([
            'state_name'=>'required'
        ],[
            'state_name.required'=>'select state'
        ]);

        shipState::findOrFail($state_id)->update([
            'state_name'=>$request->state_name,
            'updated_at'=>Carbon::now(),
        ]);

        $notification=array(
            'messsage'=>'update success',
            'alert-type'=>'success'
        );
        return Redirect()->route('state')->with($notification);
    }

    public function stateDestroy($state_id){
        shipState::findOrFail($state_id)->delete();
        $notification=array(
            'messsage'=>'delete success',
            'alert-type'=>'success'
        );

        return Redirect()->route('state')->with($notification);
    }
}
