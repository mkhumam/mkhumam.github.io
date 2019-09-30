<!DOCTYPE html>
<html lang="en">

<head>
<title>:: CAKI :: @yield('judul')</title>

<!-- add the responsive viewport meta tag -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="description" content="CAKI Bootstrap beta Design 1.0.0">
<meta name="author" content="CAKI, Caki Indonesia">

<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

<!-- Manual CSS -->
<link rel="stylesheet" href="{{ asset('manual/css/layouts.css') }} ">

<!-- Manual JS -->
<script src="{{ asset('manual/js/layouts.js') }} "></script>
<!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    </head>
    <body>

        <!-- ########### +++ TopNav Dimulai +++ ########### -->
        @extends('layouts.upper')

        <div class="container-fluid" style="margin-top:85px;background-color:#F2F2F2">
            <div class="row">

                <!-- ########### +++ SideNav Dimulai +++ ########### -->
                <div class="col-sm-2">
                    <!-- User -->
                    <img src="{{ asset('images/user.png') }}" class="rounded-circle img-thumbnail" alt="Cinque Terre" width="55" height="55">
                    <div class="welcome">Welcome,</div>
                    <div class="user-dropdown">
                        <button type="button" class="btn btn-clear dropdown-toggle font-weight-bold" data-toggle="dropdown">
                            Sohui Park
                        </button>
                        <div class="dropdown-menu" style="background-color: rgb(36, 35, 35)">
                          <a class="dropdown-item" style="color: rgb(161, 161, 161)" href="#"><i class="far fa-envelope-open"></i> Messages</a>
                          <a class="dropdown-item" style="color: rgb(161, 161, 161)" href="#"><i class="fas fa-cog"></i> Settings</a>
                          <div class="dropdown-divider" style="margin-left: 15px; margin-right: 15px;"></div>
                          <a class="dropdown-item" style="color: rgb(161, 161, 161)" href="/login"><i class="fas fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>
                    <!-- Nav Tabs untuk Menu -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active text-info font-weight-bolder" href="#">Menu</a>
                        </li>
                    </ul>
                    <br>
                    <!-- Accordion Collapsible untuk Navigasi Samping -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header has-arrow" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span style="margin-right: 15px"><i class="fas fa-home text-info"></i></span><span class="text-dark">Home</span>
                              </button>
                              <!-- <span style="float: right;font-size:24px"><i class="fas fa-angle-right"></i></span> -->
                            </h2>
                          </div>
                          <!-- Home Menu -->
                          <div id="collapseOne" class="collapse @yield('showerhome')" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/home"><small class="@yield('bolddash')"><span style="margin-right: 15px"> -- </span>  Dashboard</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/calendar"><small class="@yield('boldcal')"><span style="margin-right: 15px"> -- </span>  Calendar</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/inbox"><small class="@yield('boldin')"><span style="margin-right: 15px"> -- </span>  Inbox</small></a>
                            </div>
                          </div>
                        </div>
                        <!-- Transactions Menu -->
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span style="margin-right: 15px"> <i class="fas fa-qrcode text-info"></i> </span> <span class="text-dark">Transaction</span> 
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse @yield('showertrans')" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/quot"><small class="@yield('boldquot')"><span style="margin-right: 15px"> -- </span>  Quotation List</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/tour"><small class="@yield('boldtour')"><span style="margin-right: 15px"> -- </span>  Tour Packages List</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/reimburs"><small class="@yield('boldreim')"><span style="margin-right: 15px"> -- </span>  Reimbursement</small></a>
                            </div>
                          </div>
                        </div>
                        <!-- Reports Menu -->
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span style="margin-right: 15px"> <i class="far fa-folder text-info"></i> </span> <span class="text-dark">Reports</span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse @yield('showerrepot')" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/packages"><small class="@yield('boldpac')"><span style="margin-right: 15px"> -- </span>  Packages Report</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/invoice"><small class="@yield('boldinv')"><span style="margin-right: 15px"> -- </span>  Invoice Report</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/revenue"><small class="@yield('boldrev')"><span style="margin-right: 15px"> -- </span>  Revenue Report</small></a>
                            </div>
                          </div>
                        </div>
                        <!-- Master Data Menu -->
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                              <button class="btn btn-link collapsed text-decoration-none" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                <span style="margin-right: 15px"> <i class="fas fa-globe text-info"></i> </span> <span class="text-dark">Master Data</span>
                              </button>
                            </h2>
                          </div>
                          <div id="collapseFour" class="collapse @yield('showermastah')" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/paket"><small class="@yield('boldpak')"><span style="margin-right: 15px"> -- </span>  Packages</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/destinasi"><small class="@yield('boldes')"><span style="margin-right: 15px"> -- </span>  Destination</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/hotel"><small class="@yield('boldhot')"><span style="margin-right: 15px"> -- </span>  Hotels</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/resto"><small class="@yield('boldres')"><span style="margin-right: 15px"> -- </span>  Restaurant</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/vehicle"><small class="@yield('boldveh')"><span style="margin-right: 15px"> -- </span>  Vehicle</small></a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>
                <!-- ########### +++ SideNav Berakhir +++ ########### -->

                <!-- road to content -->
                @yield('content')

            </div> <!-- Akhir dari row -->
        </div> <!-- Akhir dari container-fluid -->

</body>
</html>
