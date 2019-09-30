@extends('layouts.general')
@section('judul', 'Packages Reimbursement')
@section('showertrans', 'show')
@section('boldreim', 'font-weight-bolder')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px;font-size: 90%">
                    <h4>Packages Reimbursement</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Packages Reimbursement</li>
                    </ol>
                    <!-- Kartu dashboard -->
                    <div class="card">
                        <div class="card-body">
                            <form action="#/action_page.php">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Nama Packages" name="search">
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
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Packages Number</th>
                                            <th>Packages Name</th>
                                            <th>Invoice Due Date</th>
                                            <th>Total</th>
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
                                            <td>500.000	</td>
                                            <td><span class="badge badge-pill badge-dark">PAID OFF</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100142</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 feb 2018</td>
                                            <td>100.000</td>
                                            <td><span class="badge badge-pill badge-dark">PAID OFF</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100042</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 march 2018</td>
                                            <td>1.500.000</td>
                                            <td><span class="badge badge-pill badge-danger">NOT YET</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018052100099</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 June 2018</td>
                                            <td>10.500.000</td>
                                            <td><span class="badge badge-pill badge-warning">NOT YET</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018030102442</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 Jan 2018</td>
                                            <td>1.550.000</td>
                                            <td><span class="badge badge-pill badge-warning">NOT YET</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
