@extends('layout.main')

@section('title')
    Perbarui Rapat - CN Event
@endsection

@section('header')
    Perbarui Rapat
@endsection

@section('content')
    <div class="container">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <form action="/acara/{{ $acara->kode_acara }}" method="POST" enctype="multipart/form-data" class="form1">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="kode_acara" value="{{ $acara->kode_acara }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Rapat</label>
                            <input type="text" name="nama_acara" class="form-control"
                                value="{{ old('nama_acara', $acara->nama_acara) }}" autocomplete="off">
                            @error('nama_acara')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control"
                                value="{{ old('lokasi', $acara->lokasi) }}" autocomplete="off">
                            @error('lokasi')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control"
                                value="{{ old('alamat', $acara->alamat) }}" autocomplete="off">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control"
                                        value="{{ old('tanggal_mulai', $acara->tanggal_mulai) }}" autocomplete="off">
                                    @error('tanggal_mulai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        value="{{ old('tanggal_selesai', $acara->tanggal_selesai) }}" autocomplete="off">
                                    @error('tanggal_selesai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Mulai</label>
                                    <input type="time" name="waktu_mulai" class="form-control"
                                        value="{{ old('waktu_mulai', $acara->waktu_mulai) }}" autocomplete="off">
                                    @error('waktu_mulai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                                    <input type="time" name="waktu_selesai" class="form-control"
                                        value="{{ old('waktu_selesai', $acara->waktu_selesai) }}" autocomplete="off">
                                    @error('waktu_selesai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if ($acara->thumbnail != '')
                            <img src="/storage/{{ $acara->thumbnail }}" alt="" width="20%">
                        @endif
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Thumbnail Rapat</label>
                            <input class="form-control" type="file" name="thumbnail" id="formFile">
                            @error('thumbnail')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <button type="submit" class="btn4 btn text-light"
                                    style="background-color: #260354;">Tambah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal Untuk Log Out -->
    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin Keluar?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="../../../">
                        <button type="button" class="btn btn-danger">Keluar</button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
