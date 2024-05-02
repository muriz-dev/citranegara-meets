@extends('layout.main')

@section('title')
    Perbarui User - CN Event
@endsection

@section('header')
    Perbarui User
@endsection

@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="/users/{{ $user->id }}" method="POST" class="form1">
                            @method('PUT')
                            @csrf
                            <input type="hidden" name="role" value="user">
                            <div class="mb-3">
                                <label for="nama lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama lengkap" value="{{ old('nama_lengkap', $user->nama_lengkap) }}">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="nomor username" value="{{ old('username', $user->username) }}">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password Baru</label>
                                <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <button type="submit" class="btn4 btn mb-3 text-light"
                                        style="background-color: #260354;">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
