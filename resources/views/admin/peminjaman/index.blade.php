@extends('kerangka.master')
@section('title', 'Tabel Peminjaman')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Peminjaman</h4>
                    </div>
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User ID (Nama User)</th>
                                    <th>Barang ID (Nama Barang)</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>USR001 (John Doe)</td>
                                    <td>BRG001 (Laptop ASUS)</td>
                                    <td>2024-01-10</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>USR002 (Alice Johnson)</td>
                                    <td>BRG002 (Smartphone Samsung)</td>
                                    <td>2024-02-15</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>USR003 (Bob Smith)</td>
                                    <td>BRG003 (Wireless Mouse Logitech)</td>
                                    <td>2024-03-05</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>USR004 (Clara Davis)</td>
                                    <td>BRG004 (External Hard Drive WD)</td>
                                    <td>2024-04-22</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>USR005 (David Wilson)</td>
                                    <td>BRG005 (Bluetooth Speaker JBL)</td>
                                    <td>2024-05-12</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>006</td>
                                    <td>USR006 (Eva Brown)</td>
                                    <td>BRG006 (DSLR Camera Canon)</td>
                                    <td>2024-06-18</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>007</td>
                                    <td>USR007 (Frank Harris)</td>
                                    <td>BRG007 (Smartwatch Apple)</td>
                                    <td>2024-07-25</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>008</td>
                                    <td>USR008 (Grace Martinez)</td>
                                    <td>BRG008 (Tablet Lenovo)</td>
                                    <td>2024-08-14</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>009</td>
                                    <td>USR009 (Henry Clark)</td>
                                    <td>BRG009 (4K TV LG)</td>
                                    <td>2024-09-30</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>010</td>
                                    <td>USR010 (Irene Lewis)</td>
                                    <td>BRG010 (Gaming Chair DXRacer)</td>
                                    <td>2024-10-11</td>
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
