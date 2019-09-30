@extends('layouts.general')
@section('judul', 'Tour Packages List')
@section('showertrans', 'show')
@section('boldtour', 'font-weight-bolder')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px;font-size: 90%">
                    <h4>Tour Packages List</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour Packages List</li>
                    </ol>
                    <!-- Kartu dashboard -->
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary">Add New Participant</button>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <form action="#/action_page.php">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Nama Participant" name="search">
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
                                            <th>Next Travel Date</th>
                                            <th>Number Of Participant</th>
                                            <th>PIC Name</th>
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
                                            <td><span class="badge badge-pill badge-dark">CLOSED ACCEPTANCE</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100142</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 feb 2018</td>
                                            <td>10</td>
                                            <td>Tika</td>
                                            <td><span class="badge badge-pill badge-dark">CLOSED ACCEPTANCE</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018020100042</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 march 2018</td>
                                            <td>3</td>
                                            <td>Darto</td>
                                            <td><span class="badge badge-pill badge-dark">OPEN</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-danger">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018052100099</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 June 2018</td>
                                            <td>23</td>
                                            <td>Suep</td>
                                            <td><span class="badge badge-pill badge-dark">OPEN</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-danger">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>Q2018030102442</td>
                                            <td>Surabaya 2D1N</td>
                                            <td>12 Jan 2018</td>
                                            <td>10</td>
                                            <td>Parto</td>
                                            <td><span class="badge badge-pill badge-dark">OPEN</span></td>
                                            <td><a href="#" class="badge badge-pill badge-primary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-danger">close</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
