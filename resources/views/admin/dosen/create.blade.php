@extends('kerangka.master')
@section('title', 'Tambah Data Dosen')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-center">Tambah Data Dosen</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" enctype="multipart/form-data" action="{{ route('dosen.store') }}">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nama</label>
                                    <div class="position-relative">
                                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                            value="{{ old('nama')}}" placeholder="Masukan Nama">
                                        @error('nama')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i> <!-- Icon untuk Nama -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nip</label>
                                    <div class="position-relative">
                                        <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror"
                                            value="{{ old('nip')}}" placeholder="Masukan Nip">
                                        @error('nip')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-list"></i> <!-- Icon untuk Nip -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Email</label>
                                    <div class="position-relative">
                                        <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email')}}" placeholder="Masukan Email">
                                        @error('email')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-envelope"></i> <!-- Icon untuk Email -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Jabatan</label>
                                    <div class="position-relative">
                                        <input type="text" id="jabatan_akademik" name="jabatan_akademik" class="form-control @error('jabatan_akademik') is-invalid @enderror"
                                            value="{{ old('jabatan_akademik')}}" placeholder="Masukan Jabatan">
                                        @error('jabatan_akademik')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-briefcase"></i> <!-- Icon untuk Jabatan -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nomor Telepon</label>
                                    <div class="position-relative">
                                        <input type="number" id="no_telepon" name="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror"
                                            value="{{ old('no_telepon')}}" placeholder="Masukan Nomor Hp">
                                        @error('no_telepon')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-telephone"></i> <!-- Icon untuk Nomor Telepon -->
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
