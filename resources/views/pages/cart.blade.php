@extends('layouts.fontend_master')
@section('content')


    <section class="breadcrumb-section set-bg" data-setbg="{{asset('fontend')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(session('cart_delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{session('cart_delete')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                        @if(session('cart_update'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('cart_update')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="shoping__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($carts as $cart)

                            <tr>
                                <td class="shoping__cart__item">
                                    <img src="{{asset($cart->product->product_image)}}" style="height: 150px "width="150px" >
                                    <h5>{{$cart->product->product_name}}</h5>
                                </td>
                                <td class="shoping__cart__price">
                                    {{$cart->price}}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <div class="quantity">
                                        <form action="{{url('/cart/quantiy/update/'.$cart->id)}}" method="post">
                                            @csrf
                                        <div class="pro-qty">
                                            <input type="text" name="qty" value="{{$cart->qty}}" min="1">
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">update</button>
                                        </form>
                                    </div>
                                </td>
                                <td class="shoping__cart__total">
                                    {{$cart->price * $cart->qty}}
                                </td>
                                <td class="shoping__cart__item__close">

                                        <a href="{{url('/cart/destroy/'.$cart->id)}}">
                                            <span class="icon_close"> </span>
                                        </a>

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

                <div class="container" >
                    <div class="row"  >
                <div class="col-lg-9" >
                    <div class="shoping__checkout" style="background-color: #95999c">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Total <span>{{$total}}</span></li>
                        </ul>
                        <a href="{{route('check')}}" class="btn-warning">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

@endsection
