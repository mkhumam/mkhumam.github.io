@extends('layouts.general')
@section('judul', 'Inbox')
@section('showerhome', 'show')
@section('boldin', 'font-weight-bolder')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" style="margin-left:25px">
                    <h4>Inbox</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inbox</li>
                    </ol>
                    <!-- Kartu Inbox -->
                    <div class="row">
                        <div class="card col-sm-3" id="inbox-nav" style="font-size: 87%">
                            <div class="card-body">
                                <button class="btn btn-danger btn-block">Compose</button>
                                
                                <div style="margin-top:10px">
                                    <ul class="nav flex-column">
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="far fa-envelope" style="margin-right:10px"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="far fa-paper-plane" style="margin-right:10px"></i>Sent</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="far fa-envelope-open" style="margin-right:10px"></i>Draft<span class="badge badge-info float-right">3</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="fas fa-share" style="margin-right:10px"></i>Outbox</a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="far fa-star" style="margin-right:10px"></i>Starred<span class="badge badge-warning float-right">6</span></a></li>
                                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="far fa-trash-alt" style="margin-right:10px"></i>Trash<span class="badge badge-danger float-right">9</span></a></li>
                                    </ul>
                                    <p class="font-weight-bold text-secondary" style="margin-top:25px;">Labels <a href="#" class="float-right m-r-10" title="Add New Labels"><i class="fa fa-plus-circle"></i></a></p>
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="fa fa-circle text-danger" style="margin-right:10px"></i>Packages Request<span class="badge badge-primary float-right">5</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="fa fa-circle text-info" style="margin-right:10px"></i>Ask Quotation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="fa fa-circle text-dark" style="margin-right:10px"></i>Invoice</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link text-decoration-none text-secondary"><i class="fa fa-circle text-primary" style="margin-right:10px"></i>Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card col-sm-9">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8 font-weight-bold">Inbox</div>
                                    <div class="col-sm-4 float-right">
                                        <div class="input-group mb-2">
                                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search Mail">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><button class="btn btn-clear"><i class="fas fa-search"></i></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-1">
                                        <label class="cekbok">
                                            <input type="checkbox">
                                            <span class="cekmak"></span>
                                        </label>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="btn-group" role="group">
                                            <button type="button" style="font-size:85%" class="btn btn-outline-secondary">Refresh</button>
                                            <button type="button" style="font-size:85%" class="btn btn-outline-secondary">Archive</button>
                                            <button type="button" style="font-size:85%" class="btn btn-outline-secondary">Trash</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" style="font-size:85%" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Tags
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Tag 1</a>
                                                <a class="dropdown-item" href="#">Tag 2</a>
                                                <a class="dropdown-item" href="#">Tag 3</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" style="font-size:85%" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                More
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Mark as read</a>
                                                <a class="dropdown-item" href="#">Mark as unread</a>
                                                <a class="dropdown-item" href="#">Spam</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="float-right">
                                            <div class="btn-group" role="group">
                                                <p class="text-secondary" style="margin-right:10px">1-50/295</p>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <button type="button" style="font-size:85%" class="btn btn-outline-secondary"><i class="fas fa-angle-left"></i></button>
                                                <button type="button" style="font-size:85%" class="btn btn-outline-secondary"><i class="fas fa-angle-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="garis"></div> -->
                                <div class="btn-group-vertical btn-block">
                                    <button type="button" class="btn btn-outline-secondary" disabled >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='fas fa-star' style='font-size:14px; margin-right:10px; color:gold'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Herman</span><span style="font-size:11px" class="badge badge-secondary">MARKETING</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right">23 Jun</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Urgent] Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" disabled >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='far fa-star' style='font-size:14px; margin-right:10px'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Mary</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right"><i class="fas fa-paperclip" style='font-size:13px; color:black;'></i> 22 Jun</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Support] There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary active" role="button" aria-pressed="true" >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='far fa-star' style='font-size:14px; margin-right:10px'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Junaidin</span><span style="font-size:11px" class="badge badge-primary">FAMILY</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right">20 Jun</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Support] Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" disabled >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='far fa-star' style='font-size:14px; margin-right:10px'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Herman</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right">14 Jun</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Ask] There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" disabled >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='far fa-star' style='font-size:14px; margin-right:10px'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Luu</span><span style="font-size:11px" class="badge badge-danger">PACKAGES REQUEST</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right"><i class="fas fa-paperclip" style='font-size:13px; color:black;'></i> 11 Jun</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Tripppic] Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary" disabled >
                                        <div class="row">
                                            <div class="col-sm-1">
                                                <label class="cekbok">
                                                    <input type="checkbox">
                                                    <span class="cekmak"></span>
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <span class="float-left"><i class='far fa-star' style='font-size:14px; margin-right:10px'></i><span id="rtreading" class="nama-pengemil font-weight-bold" style='margin-right:10px'>Gary</span><span style="font-size:11px" class="badge badge-info">WORK</span></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <span style="font-size:13px; color:black" class="float-right">29 May</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p style="color:black;font-size:13px" class="float-center">[Ask] There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
