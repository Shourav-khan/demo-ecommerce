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
                            <span>User Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                    @include('pages.profile.inc.sidebar')
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">

                            <table class="table">
                                <thead>
                                <tr>

                                    <th scope="col">Invoice_no</th>
                                    <th scope="col">Payment_type</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $item)
                                <tr>

                                    <td>{{$item->invoice_no}}</td>
                                    <td>{{$item->payment_type}}</td>
                                    <td>{{$item->total}}TK</td>
                                    <td>
                                        <a href="{{'/user/order-view/'.$item->id}}" class="btn btn-danger btn-sm">View</a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
