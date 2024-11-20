<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

@yield('css')
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        @if (Auth()->guard('admin')->check())
         @include('backend.layouts.leftsidebar')
         @elseif(Auth()->guard('customer')->check())
         @include('backend.layouts.customer_leftsidebar')
         @endif


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            @if (Auth()->guard('admin')->check())
         @include('backend.layouts.topbar')
         @elseif(Auth()->guard('customer')->check())
         @include('backend.layouts.customer_topbar')
         @endif

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
   @yield('js')

</body>

</html>
