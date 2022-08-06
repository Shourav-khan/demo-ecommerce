@extends('layouts.fontend_master')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('fontend')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>User Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>User Order Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Breadcrumb Section End -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    @include('delivery.inc.sidebar')
                </div>
            </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                <tr>

                                    <th scope="col">Invoice_no</th>
                                    <th scope="col">Payment_type</th>
                                    <th scope="col">Total</th>


                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>{{$order->invoice_no}}</td>
                                        <td>{{$order->payment_type}}</td>
                                        <td>{{$order->total}}TK</td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>


        <div class="row-mt-5">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                <tr>

                                    <th scope="col">shipping_first_name</th>
                                    <th scope="col">shipping_last_name</th>
                                    <th scope="col">shipping_email</th>
                                    <th scope="col">shipping_phone</th>
                                    <th scope="col">shipping_address</th>
                                    <th scope="col">status</th>
                                    <th scope="col">post_code</th>


                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td>{{$shipping->shipping_first_name}}</td>
                                        <td>{{$shipping->shipping_last_name}}</td>
                                        <td>{{$shipping->shipping_email}}</td>
                                        <td>{{$shipping->shipping_phone}}</td>
                                        <td>{{$shipping->address}}</td>
                                        <td>{{$shipping->status}}</td>
                                        <td>{{$shipping->post_code}}</td>


                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

        <div class="row-mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>


                                <th scope="col">Product Image</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Product Name</th>



                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orderItems as $item)

                            <tr>

                                <td>
                                    <img src="{{asset($item->product->product_image)}}" height="100px;" width="100px;">
                                </td>
                                <td>{{$item->product_quantity}}</td>
                                <td>{{$item->product->product_name}}</td>

                            </tr>

                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
