
        <!-- ########### +++ TopNav Dimulai +++ ########### -->
        <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
            <div class="container-fluid">
                <div class="col-md-2">
                    <a href="index.html"><img src="{{ asset('images/logo-icon.svg') }}" alt="CAKI LOGO" style="width: 90px;"></a>
                </div>
                <div class="col-md-8">
                    <form class="form-inline" action="#/action_page.php">
                        <input type="text" class="form-control mr-sm-2" placeholder="Search here..." name="search">
                        <button class="btn btn-default" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-2">
                    <a href="/calendar"><i class="far fa-calendar-alt" style="margin-right: 24px;font-size:20px;color:#5f5f5f"></i></a>
                    <a href="/inbox"><i class="far fa-envelope" style="font-size:20px;color:#5f5f5f"></i></a>
                    <div class="dropnotif">
                        <button onclick="myNotif()" class="dropnotbtn"><i class="far fa-bell" style="font-size:20px;color:#5f5f5f"></i></button>
                        <div id="myDropnotif" class="dropnotif-content">
                            <div style="margin:10px">
                                <div class="btn-group-vertical btn-block">
                                    <button type="button" class="btn btn-clear btn-lg text-white" disabled><h5 class="float-left">You have 4 new Notifications</h5></button>
                                    <button type="button" class="btn btn-outline-dark btn-lg text-secondary" ><i class='fas fa-info-circle float-left' style='font-size:20px;color:yellow'></i><span class="float-left" style="font-size:15px">ㅤCampaign <strong>Holiday Sale</strong> is nearly budget limit. </span><span class="float-left" style="font-size:13px;">ㅤㅤ   10:00 AM Today</span></button>
                                    <button type="button" class="btn btn-outline-dark btn-lg text-secondary" ><i class='far fa-thumbs-up float-left' style='font-size:20px;color:green'></i><span class="float-left" style="font-size:15px">ㅤYour New Campaign <strong>Holiday Sale</strong> is approved. </span><span class="float-left" style="font-size:13px;">ㅤㅤ   11:30 AM Today</span></button>
                                    <button type="button" class="btn btn-outline-dark btn-lg text-secondary" ><i class='fas fa-chart-pie float-left' style='font-size:20px;color:#3498DB'></i><span class="float-left" style="font-size:15px">ㅤWebsite visits from Twitter is 27% higher than last week. </span><span class="float-left" style="font-size:13px;">ㅤㅤ   04:00 PM Today</span></button>
                                    <button type="button" class="btn btn-outline-dark btn-lg text-secondary" ><i class='fas fa-info-circle float-left' style='font-size:20px;color:red'></i><span class="float-left" style="font-size:15px">ㅤError on website analytics configurationsㅤㅤㅤㅤ</span><span class="float-left" style="font-size:13px;">ㅤㅤ   Yesterday</span></button>
                                    <button type="button" class="btn btn-clear text-primary" ><span class="float-left">See all notifications</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/login"><i class="fas fa-sign-in-alt" style="margin-right: 24px;font-size:20px;color:#5f5f5f"></i></a>
                </div>
            </div>
        </nav>
        <!-- ########### --- TopNav Berakhir --- ########### -->
