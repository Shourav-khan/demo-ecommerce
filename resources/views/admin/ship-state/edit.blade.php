@extends('admin.admin_master')

<div class="sl-mainpanel">
    <nav class="breadcumb sl-breadcrumb">
        <span class="breadcumb-item active">State</span>
    </nav>
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class=" col-md-8">
                <div class="card"></div>




                <div class="col-lg-4">
                    <form action="{{url('state/update')}}" method="post">
                        @csrf

                        <input type="hidden" name="id" value="{{$states->id}}">
                        <div class="form-group">
                            <label class="form-control-label">Edit State <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="state_name" value="{{$states->state_name}}" >
                            @error('state_name')
                            <strong class="text-danger">{{$notification}}</strong>
                            @enderror
                        </div>

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5 col-lg-4 ">update</button>
                        </div>
                    </form>
                </div><!-- col-4 -->
            </div>
        </div>
    </div>
</div>


