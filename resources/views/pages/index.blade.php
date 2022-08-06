@extends('layouts.fontend_master')
@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories" style="background-color: #95999c">
        <div class="container">
            <div class="section-title">
                <h2>Necessary all product's</h2>
            </div>
            <div class="row">

                <div class="categories__slider owl-carousel">

                    @foreach($products as $product)

                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{asset($product->product_image)}}">
                            <h5><a href="#">{{$product->product_name}}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">All</li>

                            @foreach($categories as $cat)

                            <li data-filter=".filter{{$cat->id}}">{{$cat->category_name}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($categories as $cat)
                    @php
                        $products=App\Product::where('category_id',$cat->id)->latest()->get();
                    @endphp
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mix filter{{$cat->id}}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset($product->product_image)}}">
                            <ul class="featured__item__pic__hover">
                                <form action="{{url('/add/to-cart/'.$product->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                <li><button type="submit" ><i class="fa fa-shopping-cart"></i></button></li>
                                </form>
                            </ul>

                        </div>
                        <div class="featured__item__text">
                            <h6><a>{{$product->product_name}}</a></h6>
                            <h5>{{$product->price}} TK</h5>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->
@endsection
