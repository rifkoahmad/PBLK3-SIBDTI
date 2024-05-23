@extends('kerangka.master')
@section('title', 'Tabel Berita')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tabel Berita</h4>
                    </div>
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Konten</th>
                                    <th>Tanggal Publish</th>
                                    <th>Kategori Berita</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Teknologi 5G</td>
                                    <td>Perkembangan teknologi 5G dan dampaknya pada industri telekomunikasi.</td>
                                    <td>2024-01-10</td>
                                    <td>Teknologi</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Perubahan Iklim</td>
                                    <td>Bagaimana perubahan iklim mempengaruhi cuaca ekstrem di berbagai belahan dunia.</td>
                                    <td>2024-02-15</td>
                                    <td>Lingkungan</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Pemilu 2024</td>
                                    <td>Analisis calon presiden dan dampaknya pada politik nasional.</td>
                                    <td>2024-03-05</td>
                                    <td>Politik</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Ekonomi Digital</td>
                                    <td>Pertumbuhan ekonomi digital di Indonesia dan peluangnya.</td>
                                    <td>2024-04-22</td>
                                    <td>Ekonomi</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>005</td>
                                    <td>Inovasi Pendidikan</td>
                                    <td>Metode baru dalam pendidikan yang diterapkan selama pandemi.</td>
                                    <td>2024-05-12</td>
                                    <td>Pendidikan</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>006</td>
                                    <td>Film Terbaik</td>
                                    <td>Review film-film terbaik tahun ini dan prediksi pemenang Oscar.</td>
                                    <td>2024-06-18</td>
                                    <td>Hiburan</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>007</td>
                                    <td>Olahraga Internasional</td>
                                    <td>Prestasi atlet Indonesia di ajang olahraga internasional.</td>
                                    <td>2024-07-25</td>
                                    <td>Olahraga</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>008</td>
                                    <td>Wisata Lokal</td>
                                    <td>Destinasi wisata lokal yang menarik untuk dikunjungi tahun ini.</td>
                                    <td>2024-08-14</td>
                                    <td>Travel</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>009</td>
                                    <td>Startup Indonesia</td>
                                    <td>Pertumbuhan startup di Indonesia dan kisah suksesnya.</td>
                                    <td>2024-09-30</td>
                                    <td>Bisnis</td>
                                    <td><a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td>010</td>
                                    <td>Keamanan Cyber</td>
                                    <td>Tantangan dan solusi dalam menjaga keamanan data di era digital.</td>
                                    <td>2024-10-11</td>
                                    <td>Keamanan</td>
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
