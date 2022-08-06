@extends('admin.admin_master')

@section('admin_content')

    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <span class="breadcrumb-item active">Category</span>
            <span class="breadcrumb-item active">Edit</span>
        </nav>
        <div class="sl-pagebody">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header">Edit Category </div>
                <div class="card-body">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{route('update.category')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$categories->id}}" name="id">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Category</label>
                            <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$categories->category_name}}">

                            @error('category_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror

                        </div>

                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                </div>
            </div>
        </div>

    </div>


    </div>
@endsection
