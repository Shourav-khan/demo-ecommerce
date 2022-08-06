<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>SEU Admin</title>

    <!-- vendor css -->
    <link href="{{asset('backend')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/highlightjs/github.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{asset('backend')}}/lib/summernote/summernote-bs4.css" rel="stylesheet">



    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend')}}/css/starlight.css">
</head>

<body>


@guest('admin')
@else
    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href=""><i>Admin Operation's|</i> </a></div>
    <div class="sl-sideleft">
        <div class="sl-sideleft-menu">
            <a href="{{url('admin/home')}}" class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="{{url('/')}}" target="_blank" class="sl-menu-link ">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Site Visiting</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

            <a href="{{route('admin.category')}}"  class="sl-menu-link">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Category</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->



            <a href="#" class="sl-menu-link" >
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label"  >Products</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->

            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('add-product')}}"  class="nav-link  ">Add Products</a></li>

                <li class="nav-item"><a href="{{route('manage-products')}}" class="nav-link ">Manage Products</a></li>
            </ul>


            <a class="sl-menu-link" >
                <div class="sl-menu-item">
                    <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                    <span class="menu-item-label">Shipping Area</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->

            </a><!-- sl-menu-link -->
            <ul class="sl-menu-sub nav flex-column">
                <li class="nav-item"><a href="{{route('state')}}"  class="nav-link  ">State</a></li>

            </ul>

            <a href="{{route('admin.orders')}}" class="sl-menu-link ">
                <div class="sl-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Orders</span>
                </div><!-- menu-item -->
            </a><!-- sl-menu-link -->

        </div><!-- sl-sideleft-menu -->

        <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
        <div class="sl-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
        </div><!-- sl-header-left -->
        <div class="sl-header-right">
            <nav class="nav">
                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name"><span class="hidden-md-down"></span></span>
                        <img src="{{asset('backend')}}/img/img3.jpg" class="wd-32 rounded-circle" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href="{{route('admin.logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>
            <div class="navicon-right">
                <a id="btnRightMenu" href="" class="pos-relative">
                    <i class="icon ion-ios-bell-outline"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger"></span>
                    <!-- end: if statement -->
                </a>
            </div><!-- navicon-right -->
        </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->


@endguest
@yield('admin_content')






<script src="{{asset('backend')}}/lib/jquery/jquery.js"></script>
<script src="{{asset('backend')}}/lib/popper.js/popper.js"></script>
<script src="{{asset('backend')}}/lib/bootstrap/bootstrap.js"></script>
<script src="{{asset('backend')}}/lib/jquery-ui/jquery-ui.js"></script>

<script src="{{asset('backend')}}/lib/medium-editor/medium-editor.js"></script>
<script src="{{asset('backend')}}/lib/summernote/summernote-bs4.min.js"></script>

<script>
    $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');

        // Summernote editor
        $('#summernote').summernote({
            height: 150,
            tooltip: false
        })
    });
</script>

<script src="{{asset('backend')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{asset('backend')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{asset('backend')}}/lib/d3/d3.js"></script>
<script src="{{asset('backend')}}/lib/rickshaw/rickshaw.min.js"></script>
<script src="{{asset('backend')}}/lib/chart.js/Chart.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('backend')}}/lib/Flot/jquery.flot.resize.js"></script>
<script src="{{asset('backend')}}/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="{{asset('backend')}}/js/starlight.js"></script>
<script src="{{asset('backend')}}/js/ResizeSensor.js"></script>
<script src="{{asset('backend')}}/js/dashboard.js"></script>

<script src="{{asset('backend')}}/lib/highlightjs/highlight.pack.js"></script>
<script src="{{asset('backend')}}/lib/datatables/jquery.dataTables.js"></script>
<script src="{{asset('backend')}}/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="{{asset('backend')}}/lib/select2/js/select2.min.js"></script>


</body>
</html>
