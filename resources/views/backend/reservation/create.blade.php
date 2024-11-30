@extends('backend.layouts.app')


@section('css')
<!-- App favicon -->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- third party css -->
<link href="{{asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- App css -->
<link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('assets/js/config.js')}}"></script>

@endsection

@section('js')
<!-- App js -->
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

<!-- third party js -->
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables js -->
<script src="{{asset('assets/js/pages/datatables.js')}}"></script>
@endsection

@section('content')
<div class="container-fluid">



    <!-- Row -->
    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title mb-3">Horizontal form</h4>

                                                <form role="form" action="{{route('reservation.store')}}" method="post">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">First name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="fname" class="form-control" id="inputEmail3" placeholder="First name">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Last name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="lname" class="form-control" id="inputEmail3" placeholder="last name">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Phone</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="phone" class="form-control" id="inputEmail3" placeholder="phone">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Date</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" name="date" class="form-control" id="inputEmail3" placeholder="date">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Table no</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="table" class="form-control" id="inputEmail3" placeholder="table">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-3 col-form-label">guest no</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" name="guest" class="form-control" id="inputEmail3" placeholder="guest no">
                                                        </div>
                                                    </div>


                                                    <div class="justify-content-end row">
                                                        <div class="col-sm-9">
                                                            <button type="submit" class="btn btn-info waves-effect waves-light">Booking</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

    <!-- /Row -->
</div>
@endsection

