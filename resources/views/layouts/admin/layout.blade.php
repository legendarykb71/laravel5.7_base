<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/assets/admin-pro/assets/images/favicon.png') }}">
    <title>
    	@section('title')
            
        @show
    </title>
    <!-- Bootstrap Core CSS -->
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') !!}" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/chartist-js/dist/chartist.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') !!}" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/c3-master/c3.min.css') !!}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/toast-master/css/jquery.toast.css') !!}" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{!! asset('public/assets/admin-pro/assets/plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet" type="text/css">

    <link href="{!! asset('public/assets/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') !!}" rel="stylesheet" />

    

    @yield('header_styles')
    
    <!-- Style CSS -->
    <link href="{!! asset('public/assets/admin-pro/css/style.css') !!}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{!! asset('public/assets/admin-pro/css/pages/dashboard2.css') !!}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{!! asset('public/assets/admin-pro/css/colors/default-dark.css') !!}" id="theme" rel="stylesheet">

    <!-- Custom CSS -->    
    <link href="{!! asset('public/assets/css/custom.css') !!}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Arabian Radio Network</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('layouts.admin.includes.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.admin.includes.left-sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            @yield('content')

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 API Services by Arabian Radio Network </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/jquery/jquery.min.js') !!}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/bootstrap/js/popper.min.js') !!}"></script>
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{!! asset('public/assets/admin-pro/js/perfect-scrollbar.jquery.min.js') !!}"></script>
    <!--Wave Effects -->
    <script src="{!! asset('public/assets/admin-pro/js/waves.js') !!}"></script>
    <!--Menu sidebar -->
    <script src="{!! asset('public/assets/admin-pro/js/sidebarmenu.js') !!}"></script>
    <!-- Popup message jquery -->
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/toast-master/js/jquery.toast.js') !!}"></script>
    
    <!-- Sweet-Alert  -->
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/sweetalert/sweetalert.min.js') !!}"></script>
    
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') !!}"></script>

    <!-- This is data table -->
    <script src="{!! asset('public/assets/admin-pro/assets/plugins/datatables/jquery.dataTables.min.js') !!}"></script>

    <!--Custom JavaScript -->
    <script src="{!! asset('public/assets/admin-pro/js/custom.min.js') !!}"></script>

    @yield('scripts')
    <!-- Custom JS -->
    <script src="{!! asset('public/js/custom.js') !!}"></script>
</body>

</html>