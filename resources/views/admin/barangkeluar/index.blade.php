@extends('kerangka.master')
@section('title', 'Tabel Barang Keluar')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Barang Keluar</h4>
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
                                    <th>Tanggal Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>Smartphone Samsung</td>
                                    <td>120 Units</td>
                                    <td>2024-03-01</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>102</td>
                                    <td>Gaming Laptop ASUS</td>
                                    <td>80 Units</td>
                                    <td>2024-03-05</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>103</td>
                                    <td>Wireless Mouse Logitech</td>
                                    <td>150 Units</td>
                                    <td>2024-03-10</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>104</td>
                                    <td>External Hard Drive WD</td>
                                    <td>100 Units</td>
                                    <td>2024-03-15</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>105</td>
                                    <td>Bluetooth Speaker JBL</td>
                                    <td>70 Units</td>
                                    <td>2024-03-20</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>106</td>
                                    <td>DSLR Camera Canon</td>
                                    <td>40 Units</td>
                                    <td>2024-03-25</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>107</td>
                                    <td>Smartwatch Apple</td>
                                    <td>90 Units</td>
                                    <td>2024-03-30</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>108</td>
                                    <td>Tablet Lenovo</td>
                                    <td>85 Units</td>
                                    <td>2024-04-05</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>109</td>
                                    <td>4K TV LG</td>
                                    <td>30 Units</td>
                                    <td>2024-04-10</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>110</td>
                                    <td>Gaming Chair DXRacer</td>
                                    <td>60 Units</td>
                                    <td>2024-04-15</td>
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
