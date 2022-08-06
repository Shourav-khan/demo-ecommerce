@extends('layouts.fontend_master')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('fontend')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2> Profile Of Delivery Man</h2>
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
                    @include('delivery.inc.sidebar')
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">


                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="name" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter name" value="{{Auth::user()->name}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" value="{{Auth::user()->email}}" readonly>
                                </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

