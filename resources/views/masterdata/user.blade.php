@extends('layouts.general')
@section('judul', 'Master User')
@section('content')

                <!-- ########### +++ Konten Dimulai +++ ########### -->
                <div class="col-sm-9" title="content" style="margin-left:25px;font-size: 77%">
                    <h4>Master User</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home fa-sm"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Master User</li>
                    </ol>
                    <!-- Kartu dashboard -->
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary  ">Add New User</button>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <form action="#/action_page.php">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control" placeholder="Nama User" name="search">
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
                                            <th>User ID</th>
                                            <th>User Name</th>
                                            <th>User Location</th>
                                            <th>User PIC Name</th>
                                            <th>User PIC Contact</th>
                                            <th>Status</th>
                                            <th> ㅤㅤ </th>
                                            <!-- <th colspan="2"> ㅤㅤ </th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DSINA10000005</td>
                                            <td>Monumen Kapal Selam</td>
                                            <td>Indonesia, Surabaya</td>
                                            <td>Budi</td>
                                            <td>Budi@monkasel.com,+6281230421</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>DSINA10000205</td>
                                            <td>Kebun Binatang Surabaya</td>
                                            <td>Indonesia, Surabaya</td>
                                            <td>Joko</td>
                                            <td>joko@bonbin.com,+62812320421</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary">close</a></td>
                                        </tr>
                                        <tr>
                                            <td>DSINA20005005</td>
                                            <td>Monumen Jogja Kembali</td>
                                            <td>Indonesia, Yogyakarta</td>
                                            <td>Santoso</td>
                                            <td>santoso@gmail.com,+628123421</td>
                                            <td><span class="badge badge-pill badge-success">Active</span></td>
                                            <td><a href="#" class="badge badge-pill badge-secondary"><i class="fa fa-edit"></i></a><span> </span><a href="#" class="badge badge-pill badge-secondary">close</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ########### +++ Konten Berakhir +++ ########### -->

@endsection
