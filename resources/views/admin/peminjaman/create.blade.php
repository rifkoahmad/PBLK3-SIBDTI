@extends('kerangka.master')
@section('title', 'Tambah Data Peminjaman')
@section('content')
    <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title text-center">Tambah Data Peminjaman</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-vertical" method="POST" action="{{ route('peminjaman.store') }}">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <!-- ID Barang -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="id_barang-icon">ID Barang</label>
                                        <div class="position-relative">
                                            <input type="text" id="id_barang" name="id_barang"
                                                class="form-control @error('id_barang') is-invalid @enderror"
                                                value="{{ old('id_barang') }}" placeholder="Masukkan ID Barang">
                                            @error('id_barang')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-hash"></i> <!-- Icon untuk ID Barang -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ID Peminjam -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="id_peminjam-icon">ID Peminjam</label>
                                        <div class="position-relative">
                                            <input type="text" id="id_peminjam" name="id_peminjam"
                                                class="form-control @error('id_peminjam') is-invalid @enderror"
                                                value="{{ old('id_peminjam') }}" placeholder="Masukkan ID Peminjam">
                                            @error('id_peminjam')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-person"></i> <!-- Icon untuk ID Peminjam -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Tanggal Pinjam -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="tanggal_pinjam-icon">Tanggal Pinjam</label>
                                        <div class="position-relative">
                                            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam"
                                                class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                                                value="{{ old('tanggal_pinjam') }}" placeholder="Masukkan Tanggal Pinjam">
                                            @error('tanggal_pinjam')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-calendar-date"></i> <!-- Icon untuk Tanggal Pinjam -->
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

                                <!-- Status -->
                                <div class="col-12">
                                    <div class="form-group has-icon-left">
                                        <label for="status-icon">Status</label>
                                        <div class="position-relative">
                                            <select id="status" name="status"
                                                class="form-control @error('status') is-invalid @enderror">
                                                <option value="Dipinjam"
                                                    {{ old('status') == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                                                <option value="Dikembalikan"
                                                    {{ old('status') == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <div class="form-control-icon">
                                                <i class="bi bi-check-circle"></i> <!-- Icon untuk Status -->
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
