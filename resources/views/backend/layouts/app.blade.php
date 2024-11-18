<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <link href="{{asset('assets/libs/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets/js/config.js')}}"></script>
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->

        @include('backend.layouts.leftsidebar')


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            @include('backend.layouts.topbar')
            <!-- ========== Topbar End ========== -->

            <div class="px-3">

                <!-- Start Content-->

                @yield('content')
 <!-- content -->

            <!-- Footer Start -->
            @include('backend.layouts.footer')
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    @include('backend.layouts.js')

</body>

</html>
