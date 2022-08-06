@extends('admin.admin_master')

@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Category</a>
            <span class="breadcrumb-item active">List</span>
        </nav>
       <div class="col-md-5">
            <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{route('store.category')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Category</label>
                            <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">

                            @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class="col-md-8">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Data List</h6>

                    @if(session('Delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('Delete')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                            <thead>
                            <tr>
                                <th class="wd-15p">SI NO</th>
                                <th class="wd-15p">Category Name</th>
                                <th class="wd-15p">Status</th>
                                <th class="wd-25p">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($catagories as $category)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        @if($category->status==1)
                                            <span class="badge badge-primary">Active</span>
                                        @else
                                            <span class="badge badge-danger">De-active</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('/admin/category/edit/'.$category->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                        <a href="{{url('/admin/category/delete/'.$category->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
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
