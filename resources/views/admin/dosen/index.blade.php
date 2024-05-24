@extends('kerangka.master')
@section('title', 'Tabel Dosen')
@section('content')
    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Tabel Dosen</h4>
                        <a class="btn btn-primary" href="{{ route('dosen.create') }}">Tambah Dosen</a>
                    </div>
                    <div class="card-content">
                    </div>
                    <!-- table bordered -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Dosen</th>
                                    <th>Nip</th>
                                    <th>Email</th>
                                    <th>Jabatan</th>
                                    <th>Nomor Telepon</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($dosens as $dosen)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dosen->nama }}</td>
                                    <td>{{ $dosen->nip }}</td>
                                    <td>{{ $dosen->email }}</td>
                                    <td>{{ $dosen->jabatan_akademik }}</td>
                                    <td>{{ $dosen->no_telepon }}</td>
                                    <td>{{ $dosen->foto }}</td>
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
