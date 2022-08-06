@extends('layouts.fontend_master')
@section('content')


    <section class="breadcrumb-section set-bg" data-setbg="{{asset('fontend')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Checkout Process</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">

            <div class="checkout__form" style="background-color: whitesmoke">
                <h4>Billing Details</h4>
                <form action="{{url('place/order')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>First Name<span>*</span></p>
                                        <input type="text" name="shipping_first_name" style="color: #33001b" value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text" style="color: #33001b" name="shipping_last_name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text" name="shipping_phone"  style="color: #33001b">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text" name="shipping_email"  style="color: #33001b" value="{{Auth::user()->email}}">
                                    </div>
                                </div>
                            </div>

                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address"  style="color: #33001b" class="checkout__input__add" name="address">

                            </div>

                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text"  style="color: #33001b" name="status">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text"  style="color: #33001b" name="post_code">
                            </div>



                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order" style="background-color: whitesmoke">
                                <h4>Your Order</h4>
                                <div class="checkout__order__products">Products <span>Total</span></div>


                                @php

                                    $total= App\Cart::all()->where('user_ip',request()->ip())->sum
                                           (function ($t){
                                                 return   $t->price * $t->qty;
                                                });
                                    $quantity=App\Cart::all()->where('user_ip',request()->ip())->sum('qty');
                                @endphp


                                <div class="checkout__order__total">Total <span>$:{{$total}}</span></div>
                                <input type="hidden" name="total" value="{{$total}}">
                                <p><h4><marquee>Select your orders system & stay with us</marquee></h4></p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        HandCash
                                        <input type="checkbox" id="payment" name="payment_type" value="handcash">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Bkash
                                        <input type="checkbox" id="paypal" name="payment_type" value="bkash">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>


                                <button type="submit" class="site-btn" style="color: #0c0c0c">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

@endsection
