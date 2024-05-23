@extends('kerangka.master')
@section('title', 'Tabel Barang Masuk')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Barang Masuk</h4>
                    </div>
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Smartphone Samsung</td>
                                    <td>150 Units</td>
                                    <td>2024-01-10</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Gaming Laptop ASUS</td>
                                    <td>75 Units</td>
                                    <td>2024-02-15</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Wireless Mouse Logitech</td>
                                    <td>200 Units</td>
                                    <td>2024-03-05</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>External Hard Drive WD</td>
                                    <td>120 Units</td>
                                    <td>2024-04-22</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Bluetooth Speaker JBL</td>
                                    <td>90 Units</td>
                                    <td>2024-05-12</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>006</td>
                                    <td>DSLR Camera Canon</td>
                                    <td>60 Units</td>
                                    <td>2024-06-18</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>007</td>
                                    <td>Smartwatch Apple</td>
                                    <td>130 Units</td>
                                    <td>2024-07-25</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>008</td>
                                    <td>Tablet Lenovo</td>
                                    <td>110 Units</td>
                                    <td>2024-08-14</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>009</td>
                                    <td>4K TV LG</td>
                                    <td>40 Units</td>
                                    <td>2024-09-30</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>010</td>
                                    <td>Gaming Chair DXRacer</td>
                                    <td>50 Units</td>
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
