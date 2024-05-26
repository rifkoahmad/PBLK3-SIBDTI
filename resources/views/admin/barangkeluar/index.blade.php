@extends('kerangka.master')
@section('title', 'Tabel Barang Keluar')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Tabel Barang Keluar</h4>
                        <a class="btn btn-primary" href="{{ route('barangkeluar.create') }}">Tambah Barang Keluar</a>
                    </div>
                     @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @elseif (session()->has('failed'))
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              {{ session('failed') }}
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id Barang</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal Keluar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang_keluars as $barangkeluar)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barangkeluar->id_barang }}</td>
                                    <td>{{ $barangkeluar->jumlah }}</td>
                                    <td>{{ $barangkeluar->tanggal_keluar }}</td>
                                </tr>
                                @endforeach
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
