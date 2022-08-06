@extends('admin.admin_master')

<div class="sl-mainpanel">
    <nav class="breadcumb sl-breadcrumb">
        <span class="breadcumb-item active">State</span>
    </nav>



    <div class="sl-pagebody">
        <div class="row row-sm">
            <div class=" col-md-8">
                <div class="card"></div>
                <div class="card-header">State List</div>
                <div class="card-body">
                    <div class="table-wrapper">
                        <table id="database1" class="table display responsive nowrap">
                            <thread>


                                <tr>
                                    <th class="wd-30p">State Name</th>
                                </tr>

                            </thread>
                            <tbody>
                            @foreach($states as $state)
                            <tr>
                                <td>{{$state->state_name}}</td>
                                <td></td>
                                <td>
                                    <a href="{{url('/state-edit/'.$state->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                                    <a href="{{url('/state-delete/'.$state->id)}}" class="btn btn-sm btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



    <div class="col-lg-4">
        <form action="{{route('state-store')}}" method="post">
            @csrf
        <div class="form-group">
            <label class="form-control-label">Add new State <span class="tx-danger">*</span></label>
            <input class="form-control" type="text" name="state_name" value="{{old('state_name')}}" >
            @error('state_name')
            <strong class="text-danger">{{$notification}}</strong>
            @enderror
        </div>

        <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5 col-lg-4 ">Add</button>
        </div>
        </form>
    </div><!-- col-4 -->


            </div>

        </div>
    </div>
</div>


