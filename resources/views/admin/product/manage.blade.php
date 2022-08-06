@extends('admin.admin_master')
@section('admin_content')



    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="#">Admin</a>
            <span class="breadcrumb-item active">Manage</span>
        </nav>

    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-12">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Product List</h6>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('delete')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif


                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                            <tr>
                                <th class="wd-15p">Image</th>
                                <th class="wd-15p">Product Name</th>
                                <th class="wd-15p">Product Quantity</th>
                                <th class="wd-15p">Category</th>
                                <th class="wd-25p">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $row)
                                <tr>
                                    <td>
                                        <img src="{{asset($row->product_image)}} " height="50px" width="50px">
                                    </td>
                                    <td>{{$row->product_name}}</td>
                                    <td>{{$row->product_quantity}}</td>
                                    <td>{{$row->category_id}}</td>
                                    <td>
                                        @if($row->status==0)
                                            <span class="badge badge-primary">Active</span>
                                        @else
                                            <span class="badge badge-danger">De-active</span>
                                        @endif

                                    </td>
                                    <td>
                                        <a href="{{url('/admin/product/edit/'.$row->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{url('/admin/product/delete/'.$row->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div><!-- card -->

            </div>
        </div>
    </div>
    </div>
    @endsection






