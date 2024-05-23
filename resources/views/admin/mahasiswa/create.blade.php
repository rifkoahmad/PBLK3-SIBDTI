@extends('kerangka.master')
@section('title', 'Tambah Data Mahasiswa')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tambah Data Mahasiswa</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form class="form form-vertical" method="POST" action="{{ route('mahasiswa.store') }}">
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
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nim</label>
                                    <div class="position-relative">
                                        <input type="number" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror"
                                            value="{{ old('nim')}}" placeholder="Masukan Nim">
                                        @error('nim')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-card-list"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Program Studi</label>
                                    <div class="position-relative">
                                        <input type="text" id="program_studi" name="program_studi" class="form-control @error('program_studi') is-invalid @enderror"
                                            value="{{ old('program_studi')}}" placeholder="Masukan Prodi">
                                        @error('program_studi')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Angkatan</label>
                                    <div class="position-relative">
                                        <input type="number" id="angkatan" name="angkatan" class="form-control @error('angkatan') is-invalid @enderror"
                                            value="{{ old('angkatan')}}" placeholder="Masukan Angkatan">
                                        @error('angkatan')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Nomor Telepon</label>
                                    <div class="position-relative">
                                        <input type="number" id="nomor_telepon" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror"
                                            value="{{ old('nomor_telepon')}}" placeholder="Masukan Nomor Hp">
                                        @error('nomor_telepon')
                                            <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <div class="form-control-icon">
                                            <i class="bi bi-telephone"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
