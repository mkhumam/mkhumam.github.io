
        <!-- ########### +++ SideNav Dimulai +++ ########### -->

        <div class="col-sm-2" title="sidenav">
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
                          <div class="card-header" id="headingOne">
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
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Calendar</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Inbox</small></a>
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
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Quotation List</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Tour Packages List</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Reimbursement</small></a>
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
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Packages Report</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Invoice Report</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Revenue Report</small></a>
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
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Destination</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Hotels</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Restaurant</small></a>
                            </div>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="#/home"><small><span style="margin-right: 15px"> -- </span>  Vehicle</small></a>
                            </div>
                          </div>
                        </div>
                    </div>
                    <hr class="d-sm-none">
                </div>

                <!-- ########### +++ SideNav Berakhir +++ ########### -->
