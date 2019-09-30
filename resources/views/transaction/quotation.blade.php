@extends('layouts.general')
@section('judul', 'Quotation List')
@section('showertrans', 'show')
@section('boldquot', 'font-weight-bolder')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px;font-size: 85%">
                    <h4>Quotation List</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quotation List</li>
                    </ol>
                    <!-- Kartu dashboard -->
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary">Add New Quotation</button>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <form action="#/action_page.php">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Nama Quotation" name="search">
                                    <div class="input-group-prepend">
                                        <div>
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Quotation Number</th>
                                            <th>Packages Name</th>
                                            <th>Requested Date</th>
                                            <th>Number of Changes</th>
                                            <th>Customers Name</th>
                                            <th colspan="2">Status</th>
                                            <!-- <th> ㅤㅤ </th> -->
                                            <!-- <th colspan="2"> ㅤㅤ </th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Q2018020102042</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 Jan 2018</td>
                                            <td>0</td>
                                            <td>Jony</td>
                                            <td><span class="badge badge-pill badge-dark">REQUESTED</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-share"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="far fa-envelope"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100142</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 feb 2018</td>
                                            <td>10</td>
                                            <td>Tika</td>
                                            <td><span class="badge badge-pill badge-dark">REQUESTED</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-share"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="far fa-envelope"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100042</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 march 2018</td>
                                            <td>3</td>
                                            <td>Darto</td>
                                            <td><span class="badge badge-pill badge-dark">DEALS</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-share"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="far fa-envelope"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018052100099</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 June 2018</td>
                                            <td>23</td>
                                            <td>Suep</td>
                                            <td><span class="badge badge-pill badge-dark">DEALS</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-share"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="far fa-envelope"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018030102442</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 Jan 2018</td>
                                            <td>10</td>
                                            <td>Parto</td>
                                            <td><span class="badge badge-pill badge-dark">REQUESTED</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-share"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="far fa-envelope"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
