@extends('admin.admin_master')
@section('admin_content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <a class="breadcrumb-item" href="index.html">Updates Product</a>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Edit Products</h6>
                <form action="{{url('admin/product/update')}}" method="post" >

                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <div class="form-layout">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Product name: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="product_name" value="{{$product->product_name}}" placeholder="Product name">
                                    @error('product_name')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="price" value="{{$product->price}}" placeholder="price ">
                                    @error('price')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="number" name="product_quantity" value="{{$product->product_quantity}}" placeholder="product quantity">
                                    @error('product_quantity')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div><!-- col-4 -->



                            <div class="col-lg-4">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="category_id" >
                                        <option label="Choose category"></option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    </select>

                                    @error('category_id')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label">Product Description: <span class="tx-danger">*</span></label>
                                    <textarea name="p_description"  id="summernote">{{$product->product_description}}</textarea>

                                    @error('p_description')
                                    <strong class="text-danger">{{$message}}</strong>
                                    @enderror

                                </div>
                            </div>
                        </div><!-- row -->

                        <div class="form-layout-footer">
                            <button class="btn btn-info mg-r-5">Update Product</button>
                        </div><!-- form-layout-footer -->




            </div><!-- form-layout -->
                </form>
        </div><!-- card -->
        <br>

        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                    <img src="{{asset($product->product_image)}}" height="100px" width="100px" >

                </div>
                <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Update photo</button>
                </div><!-- form-layout-footer -->
            </div><!-- col-4 -->
        </form>

    </div>
</div>
@endsection




