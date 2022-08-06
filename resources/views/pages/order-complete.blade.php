@extends('layouts.fontend_master')
@section('content')





    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('fontend')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Order Done</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Order DOne</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">

            @if(session('orderComplete'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('orderComplete')}}</strong>
                    <br>
                    <strong>Your Delivery Confirm Code is:<span class="text-black-50">10058</span></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection
