@extends('kerangka.master')
@section('title', 'Tabel Pengembalian')
@section('content')
     <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Pengembalian</h4>
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
                                        <th>Tanggal Kembali</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>USR101 (Michael Right)</td>
                                        <td>BRG101 (Monitor)</td>
                                        <td>2024-01-10</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>USR102 (Alice Johnson)</td>
                                        <td>BRG102 (Printer)</td>
                                        <td>2024-02-15</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>USR103 (Bob Smith)</td>
                                        <td>BRG103 (Keyboard)</td>
                                        <td>2024-03-05</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>104</td>
                                        <td>USR104 (Clara Davis)</td>
                                        <td>BRG104 (Mouse)</td>
                                        <td>2024-04-22</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>105</td>
                                        <td>USR105 (David Wilson)</td>
                                        <td>BRG105 (Headset)</td>
                                        <td>2024-05-12</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>106</td>
                                        <td>USR106 (Eva Brown)</td>
                                        <td>BRG106 (Monitor)</td>
                                        <td>2024-06-18</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>107</td>
                                        <td>USR107 (Frank Harris)</td>
                                        <td>BRG107 (Speaker)</td>
                                        <td>2024-07-25</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>108</td>
                                        <td>USR108 (Grace Martinez)</td>
                                        <td>BRG108 (Tablet)</td>
                                        <td>2024-08-14</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>109</td>
                                        <td>USR109 (Henry Clark)</td>
                                        <td>BRG109 (Smartphone)</td>
                                        <td>2024-09-30</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>110</td>
                                        <td>USR110 (Irene Lewis)</td>
                                        <td>BRG110 (Router)</td>
                                        <td>2024-10-11</td>
                                        <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="mail"></i></a></td>
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
