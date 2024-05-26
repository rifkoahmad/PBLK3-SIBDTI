@extends('kerangka.master')
@section('title', 'Tambah Data Berita')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Data Berita</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" enctype="multipart/form-data"
                        action="{{ route('berita.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="judul">Judul</label>
                                        <div class="position-relative">
                                            <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror"
                                                value="{{ old('judul')}}" placeholder="Masukkan Judul">
                                            @error('judul')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-file-text"></i> <!-- Icon untuk Judul -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="isi">Isi</label>
                                        <div class="position-relative">
                                            <textarea id="isi" name="isi" class="form-control @error('isi') is-invalid @enderror"
                                                placeholder="Masukkan Isi">{{ old('isi')}}</textarea>
                                            @error('isi')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-card-text"></i> <!-- Icon untuk Isi -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="kategori">Kategori</label>
                                        <div class="position-relative">
                                            <input type="text" id="kategori" name="kategori" class="form-control @error('kategori') is-invalid @enderror"
                                                value="{{ old('kategori')}}" placeholder="Masukkan Kategori">
                                            @error('kategori')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-tags"></i> <!-- Icon untuk Kategori -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="gambar" class="form-label">Gambar</label>
                                        <div class="position-relative">
                                            <input class="form-control" id="gambar" name="gambar" type="file" class="form-control @error('gambar') is-invalid @enderror"
                                                value="{{ old('gambar')}}" placeholder="Masukkan Gambar">
                                            @error('gambar')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-image"></i> <!-- Icon untuk Gambar -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi</label>
                                        <div class="position-relative">
                                            <input class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" type="date" class="form-control @error('tanggal_publikasi') is-invalid @enderror"
                                                value="{{ old('tanggal_publikasi')}}" placeholder="Masukkan Tanggal Publikasi">
                                            @error('tanggal_publikasi')
                                                <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-date"></i> <!-- Icon untuk Tanggal Publikasi -->
                                            </div>
                                        </div>
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
