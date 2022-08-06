@extends('admin.admin_master')
@section('admin_content')





<div class="sl-mainpanel">

    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <a class="breadcrumb-item" href="index.html">Products</a>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">Product Adding</h6>

                <form action="{{route('store-products')}}" method="post" enctype="multipart/form-data">

                    @csrf
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
                                <input class="form-control" type="text" name="product_name" value="{{old('product_name')}}" placeholder="Product name">
                                @error('product_name')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="price"  placeholder="price ">
                                @error('price')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" name="product_quantity" value="{{old('quantity')}}" placeholder="product quantity">
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
                                <textarea name="p_description"  id="summernote"></textarea>

                                @error('p_description')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror

                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="product_image"  placeholder="product quantity">
                                @error('product_image')
                                <strong class="text-danger">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Add This</button>

                    </div>
                </form>
                </div>
            </div>

            </div>
    </div>
@endsection



