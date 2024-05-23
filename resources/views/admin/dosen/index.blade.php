@extends('kerangka.master')
@section('title', 'Tabel Dosen')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Dosen</h4>
                    </div>
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Dosen</th>
                                    <th>Nip</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Dr. John Doe</td>
                                    <td>19700101 199703 1 001</td>
                                    <td>johndoe@university.ac.id</td>
                                    <td>Dekan Fakultas Teknik</td>
                                    <td>081234567890</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Prof. Alice Johnson</td>
                                    <td>19750302 200501 2 002</td>
                                    <td>alicejohnson@university.ac.id</td>
                                    <td>Ketua Program Studi</td>
                                    <td>081234567891</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Dr. Bob Smith</td>
                                    <td>19800404 199803 3 003</td>
                                    <td>bobsmith@university.ac.id</td>
                                    <td>Wakil Dekan</td>
                                    <td>081234567892</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Dr. Clara Davis</td>
                                    <td>19810505 199905 4 004</td>
                                    <td>claradavis@university.ac.id</td>
                                    <td>Dosen Senior</td>
                                    <td>081234567893</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Prof. David Wilson</td>
                                    <td>19680606 199706 5 005</td>
                                    <td>davidwilson@university.ac.id</td>
                                    <td>Ketua Departemen</td>
                                    <td>081234567894</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>006</td>
                                    <td>Dr. Eva Brown</td>
                                    <td>19790707 200107 6 006</td>
                                    <td>evabrown@university.ac.id</td>
                                    <td>Dosen</td>
                                    <td>081234567895</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>007</td>
                                    <td>Prof. Frank Harris</td>
                                    <td>19690708 199708 7 007</td>
                                    <td>frankharris@university.ac.id</td>
                                    <td>Guru Besar</td>
                                    <td>081234567896</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>008</td>
                                    <td>Dr. Grace Martinez</td>
                                    <td>19820809 200309 8 008</td>
                                    <td>gracemartinez@university.ac.id</td>
                                    <td>Kepala Laboratorium</td>
                                    <td>081234567897</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>009</td>
                                    <td>Dr. Henry Clark</td>
                                    <td>19710910 199809 9 009</td>
                                    <td>henryclark@university.ac.id</td>
                                    <td>Dosen</td>
                                    <td>081234567898</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>010</td>
                                    <td>Prof. Irene Lewis</td>
                                    <td>19621011 199610 10 010</td>
                                    <td>irenelewis@university.ac.id</td>
                                    <td>Peneliti Utama</td>
                                    <td>081234567899</td>
                                    <td>JPEG</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
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
