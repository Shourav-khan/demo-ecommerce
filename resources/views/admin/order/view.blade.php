@extends('admin.admin_master')
@section('admin_content')
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Admin</a>
            <span class="breadcrumb-item active">Order View</span>
        </nav>

        <div class="sl-pagebody">
            <div class="row row-sm">
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Shipping address</h6>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="firstname" value="{{$shipping->shipping_first_name}}" readonly placeholder="Enter firstname">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="firstname" value="{{$shipping->shipping_last_name}}" readonly >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->shipping_email}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Shipping Phone: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->shipping_phone}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Shipping Address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->address}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">State: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->state}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Post Code: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->post_code}}" readonly>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->

                        <hr>
                <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Order</h6>
                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Invoice No: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"  value="{{$order->invoice_no}}" readonly placeholder="Enter firstname">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"  value="{{$shipping->shipping_last_name}}" readonly >
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Payment type: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$order->payment_type}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Total: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text"   value="{{$order->total}}" readonly>
                                </div>
                            </div><!-- col-4 -->

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Shipping Address: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="email"  value="{{$shipping->address}}" readonly>
                                </div>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div><!-- form-layout -->

                    <div class="card pd-20 pd-sm-40" style="margin-top: 20px;">
                                    <h6 class="card-body-title">Order Item</h6>
                                    <div class="form-layout">

                                        <div class="table-wrapper">
                                            <table id="" class="table display responsive nowrap ">
                                                <thead>
                                                <tr>
                                                    <th class="wd-15p">Image</th>
                                                    <th class="wd-15p">Poduct Name</th>
                                                    <th class="wd-15p">Quantity</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach ($orderItems as $row)
                                                    <tr>
                                                        <td>
                                                            <img src="{{ asset($row->product->product_image) }}" height="50px;" width="50px;" alt="img">
                                                        </td>
                                                        <td>
                                                            {{ $row->product->product_name }}
                                                        </td>

                                                        <td>
                                                            {{ $row->product_qty }}
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div><!-- table-wrapper -->

                                    </div><!-- row -->
                        </div><!-- form-layout -->
                    </div><!-- card -->
                    </div><!-- card -->
                    </div><!-- form-layout -->
                    </div><!-- card -->



            </div>
        </div>
    </div>

    </div>
@endsection
