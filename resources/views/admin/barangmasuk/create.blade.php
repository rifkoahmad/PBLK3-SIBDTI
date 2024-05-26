@extends('kerangka.master')
@section('title', 'Tambah Data Barang Masuk')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Data Barang Masuk</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('barangmasuk.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="id_barang-icon">ID Barang</label>
                                        <div class="position-relative">
                                            <input type="text" id="id_barang" name="id_barang"
                                                class="form-control @error('id_barang') is-invalid @enderror"
                                                value="{{ old('id_barang') }}" placeholder="Masukan ID Barang">
                                            @error('id_barang')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-hash"></i> <!-- Icon untuk ID Barang -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="jumlah-icon">Jumlah</label>
                                        <div class="position-relative">
                                            <input type="text" id="jumlah" name="jumlah"
                                                class="form-control @error('jumlah') is-invalid @enderror"
                                                value="{{ old('jumlah') }}" placeholder="Masukan Jumlah">
                                            @error('jumlah')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-calculator"></i> <!-- Icon untuk Jumlah -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tanggal_masuk-icon">Tanggal Masuk</label>
                                        <div class="position-relative">
                                            <input type="date" id="tanggal_masuk" name="tanggal_masuk"
                                                class="form-control @error('tanggal_masuk') is-invalid @enderror"
                                                value="{{ old('tanggal_masuk') }}" placeholder="Masukan Tanggal Masuk">
                                            @error('tanggal_masuk')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-date"></i> <!-- Icon untuk Tanggal Masuk -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="supplier-icon">Supplier</label>
                                        <div class="position-relative">
                                            <input type="text" id="supplier" name="supplier"
                                                class="form-control @error('supplier') is-invalid @enderror"
                                                value="{{ old('supplier') }}" placeholder="Masukkan Nama Supplier">
                                            @error('supplier')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-bag"></i> <!-- Icon untuk Supplier -->
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
