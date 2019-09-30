@extends('layouts.general')
@section('judul', 'Dashboard')
@section('showerhome', 'show')
@section('bolddash', 'font-weight-bolder')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px">
                    <h4>Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                    <!-- Kartu dashboard -->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card text-white bg-info">
                                <div class="card-body">
                                    <h1 class="card-title text-center">100</h1>
                                    <p class="card-text text-center">Packages request</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card text-white bg-secondary">
                            <div class="card-body">
                                <h1 class="card-title text-center">20</h1>
                                <p class="card-text text-center">Active Packages</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card text-white bg-warning">
                            <div class="card-body">
                                <h1 class="card-title text-center">5</h1>
                                <p class="card-text text-center">Open Invoices</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card text-white bg-dark">
                            <div class="card-body">
                                <h1 class="card-title text-center">1.025</h1>
                                <p class="card-text text-center">Traveller</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text font-weight-bolder">Active Packages <span style="float: right"><button class="fa fa-plus-circle text-secondary btn btn-clear" style="font-size: 20px;"></button></span></p>
                        </div>
                        <div class="card-body" style="cursor: move;">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item justhover">#L1008</li>
                                    <li class="list-group-item">
                                        <h5>Surabaya 2D1N</h5>
                                        <small>Family Trip Without Guide</small>
                                        <div class="dropdown-divider"></div>
                                        <div class="card-group">
                                            <span><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;"><i class="fa fa-edit"></i></button></span>
                                            <span><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;margin-left: 5px"><i class="far fa-clock"></i></button></span>
                                            <span style="margin-right: 90px"><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;margin-left: 5px"><i class="fa fa-comments"></i></button></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text font-weight-bolder">Requested Packages<span style="float: right"><button class="fa fa-plus-circle text-secondary btn btn-clear" style="font-size: 20px;"></button></span></p>
                        </div>
                        <div class="card-body" style="cursor: move;">
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item justhover">#L1008</li>
                                    <li class="list-group-item">
                                        <h5>Surabaya 2D1N</h5>
                                        <small>Family Trip Without Guide</small>
                                        <div class="dropdown-divider"></div>
                                        <div class="card-group">
                                            <span><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;"><i class="fa fa-edit"></i></button></span>
                                            <span><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;margin-left: 5px"><i class="far fa-clock"></i></button></span>
                                            <span style="margin-right: 90px"><button class="btn btn-outline-secondary card" style="width: 2,3rem;font-size: 20px;margin-left: 5px"><i class="fa fa-comments"></i></button></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
