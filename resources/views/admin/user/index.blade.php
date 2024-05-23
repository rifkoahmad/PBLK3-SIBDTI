@extends('kerangka.master')
@section('title', 'Tabel User')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel User</h4>
                    </div>
                    <div class="card-content">
                        </div>
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>John Doe</td>
                                        <td>password123</td>
                                        <td>johndoe@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>002</td>
                                        <td>Jane Smith</td>
                                        <td>qwerty456</td>
                                        <td>janesmith@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>003</td>
                                        <td>Michael Brown</td>
                                        <td>letmein789</td>
                                        <td>michaelbrown@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>004</td>
                                        <td>Linda Green</td>
                                        <td>passw0rd111</td>
                                        <td>lindagreen@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>005</td>
                                        <td>David Wilson</td>
                                        <td>abc123XYZ</td>
                                        <td>davidwilson@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>006</td>
                                        <td>Emily Johnson</td>
                                        <td>password987</td>
                                        <td>emilyjohnson@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>007</td>
                                        <td>James White</td>
                                        <td>secure456!</td>
                                        <td>jameswhite@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>008</td>
                                        <td>Olivia Martin</td>
                                        <td>myp@ssw0rd</td>
                                        <td>oliviamartin@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>009</td>
                                        <td>Christopher Lee</td>
                                        <td>chris789!</td>
                                        <td>christopherlee@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>010</td>
                                        <td>Sarah King</td>
                                        <td>king12345</td>
                                        <td>sarahking@example.com</td>
                                        <td><a href="#"><i
                                                    class="badge-circle badge-circle-light-secondary font-medium-1"
                                                    data-feather="edit"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Borderless table end -->
@endsection
