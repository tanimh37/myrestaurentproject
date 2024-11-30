<div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="index.html" class="logo-light">
                    <img src="assets/images/logo-light.png" alt="logo" class="logo-lg" height="28">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                </a>

                <!-- Brand Logo Dark -->
                <a href="index.html" class="logo-dark">
                    <img src="assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="28">
                    <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28">
                </a>
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="{{url('/admin/dashboard')}}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text">tanim Dashboards  </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>

                    <li class="menu-title">Custom</li>



                    <li class="menu-item">
                        <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-table"></i></span>
                            <span class="menu-text">Special Offer </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTables">
                            <ul class="sub-menu">

                                <li class="menu-item">
                                    <a href="{{route('specialoffer.index')}}" class="menu-link">
                                        <span class="menu-text">All Offer</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="pages-register.html" class="menu-link">
                                        <span class="menu-text">Add New Offer</span>
                                    </a>
                                </li>



                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuLayouts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-layout"></i></span>
                            <span class="menu-text"> Add Menu </span>
                            <span class="badge bg-blue ms-auto">New</span>
                        </a>

                    </li>

                    <li class="menu-title">Components</li>







                    <li class="menu-item">
                        <a href="#menuTables" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-table"></i></span>
                            <span class="menu-text">Reservation Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuTables">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="tables-basic.html" class="menu-link">
                                        <span class="menu-text">Padding Reservation</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="tables-datatables.html" class="menu-link">
                                        <span class="menu-text">Approve Reservation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item">
                        <a href="#menuCharts" data-bs-toggle="collapse" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-doughnut-chart"></i></span>
                            <span class="menu-text"> Restaurent </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="menuCharts">
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="charts-apex.html" class="menu-link">
                                        <span class="menu-text">Add Restaurent</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-morris.html" class="menu-link">
                                        <span class="menu-text">Restaurent Catagori</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="charts-chartjs.html" class="menu-link">
                                        <span class="menu-text">All Restaurent</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>




                </ul>
            </div>
        </div>
