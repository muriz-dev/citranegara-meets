@extends('layout.main')

@section('title')
    Tambah Rapat - CN Event
@endsection

@section('header')
    Tambah Rapat
@endsection

@section('content')
    <div class="container">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <form action="/acara" method="POST" enctype="multipart/form-data" class="form1">
                        @csrf
                        <input type="hidden" name="kode_acara" value="{{ 'A' . rand(100, 1000) }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Rapat</label>
                            <input type="text" name="nama_acara" class="form-control" value="{{ old('nama_acara') }}"
                                autocomplete="off">
                            @error('nama_acara')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="exampleInputPassword1"
                                value="{{ old('lokasi') }}">
                            @error('lokasi')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1"
                                value="{{ old('alamat') }}">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ old('tanggal_mulai') }}">
                                    @error('tanggal_mulai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp"
                                        value="{{ old('tanggal_selesai') }}">
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
                                    <input type="time" name="waktu_mulai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ old('waktu_mulai') }}">
                                    @error('waktu_mulai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Waktu Selesai</label>
                                    <input type="time" name="waktu_selesai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" value="{{ old('waktu_selesai') }}">
                                    @error('waktu_selesai')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
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
    <!-- Modal image -->
    <div class="modal fade" id="gambarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="../../assets/img/event1.jpeg" alt="">
            </div>
        </div>
    </div>

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
