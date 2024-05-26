@extends('kerangka.master')
@section('title', 'Tambah Data Pengembalian')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Data Pengembalian</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('pengembalian.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <!-- ID Barang -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="id_barang_pinjam-icon">ID Barang Pinjam</label>
                                        <div class="position-relative">
                                            <input type="text" id="id_barang_pinjam" name="id_barang_pinjam"
                                                class="form-control @error('id_barang_pinjam') is-invalid @enderror"
                                                value="{{ old('id_barang_pinjam') }}"
                                                placeholder="Masukkan ID Barang Pinjam">
                                            @error('id_barang_pinjam')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-box-arrow-in-right"></i>
                                                <!-- Icon untuk ID Barang Pinjam -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Kembali -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tanggal_kembali-icon">Tanggal Kembali</label>
                                        <div class="position-relative">
                                            <input type="date" id="tanggal_kembali" name="tanggal_kembali"
                                                class="form-control @error('tanggal_kembali') is-invalid @enderror"
                                                value="{{ old('tanggal_kembali') }}" placeholder="Masukkan Tanggal Kembali">
                                            @error('tanggal_kembali')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar"></i> <!-- Icon untuk Tanggal Kembali -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
