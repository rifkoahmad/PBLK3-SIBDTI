@extends('kerangka.master')
@section('title', 'Tambah Data Barang')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" enctype="multipart/form-data" action="{{ route('barang.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="kode-barang-icon">Kode Barang</label>
                                    <div class="position-relative">
                                        <input type="text" id="kode_barang" name="kode_barang" class="form-control @error('kode_barang') is-invalid @enderror"
                                            value="{{ old('kode_barang')}}" placeholder="Masukan Kode Barang">
                                        @error('kode_barang')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-upc-scan"></i> <!-- Icon untuk Kode Barang -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="nama_barang-icon">Nama Barang</label>
                                    <div class="position-relative">
                                        <input type="text" id="nama_barang" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror"
                                            value="{{ old('nama_barang')}}" placeholder="Masukan Nama Barang">
                                        @error('nama_barang')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-box-seam"></i> <!-- Icon untuk Nama Barang -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="kategori-icon">kategori</label>
                                    <div class="position-relative">
                                        <input type="text" id="kategori" name="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                            value="{{ old('kategori')}}" placeholder="Masukan kategori">
                                        @error('kategori')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-tag"></i> <!-- Icon untuk Kategori -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="jumlah-icon">Jumlah</label>
                                    <div class="position-relative">
                                        <input type="text" id="jumlah" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror"
                                            value="{{ old('jumlah')}}" placeholder="Masukan Jumlah">
                                        @error('jumlah')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-calculator"></i> <!-- Icon untuk Jumlah -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="posisi-icon">Posisi</label>
                                    <div class="position-relative">
                                        <input type="text" id="posisi" name="posisi" class="form-control @error('posisi') is-invalid @enderror"
                                            value="{{ old('posisi')}}" placeholder="Masukan posisi">
                                        @error('posisi')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-geo-alt"></i> <!-- Icon untuk posisi -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="formFile" class="form-label">Foto</label>
                                    <div class="position-relative">
                                        <input class="form-control" id="foto" name="foto" type="file" class="form-control @error('foto') is-invalid @enderror"
                                            value="{{ old('foto')}}" placeholder="Masukan Foto">
                                        @error('foto')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-file-earmark-image"></i> <!-- Icon untuk Foto -->
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
