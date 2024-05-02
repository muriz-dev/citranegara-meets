@extends('layout.main')

@section('title')
    Tambah Peserta - CN Event
@endsection

@section('header')
    Tambah Peserta
@endsection

@section('content')
    <div class="container">
        <div class="">
            <div class="card">
                <div class="card-body">
                    <form action="/acara/{{ $acara }}/pengunjung" method="POST" class="form1">
                        @csrf
                        <input type="hidden" name="kode_acara" value="{{ $acara }}">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Peserta</label>
                            <input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" class="form-control" autocomplete="off" autofocus>
                            @error('nama_lengkap')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                            <input type="tel" name="telepon" value="{{ old('telepon') }}" class="form-control" autocomplete="off">
                            @error('telepon')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" autocomplete="off">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ProfilDropdown" class="form-label">Profil</label>
                            <select class="form-select" name="profil" id="ProfilDropdown">
                                <option selected disabled hidden>Pilih...</option>
                                <option value="Pelajar">Pelajar</option>
                                <option value="Pengajar">Pengajar</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label id="LabelStatus" style="display: none">Status</label>
                            <select name="status" id="StatusDropdown" class="form-select" style="display: none" required>
                                <option value="SMP/MTS SEDERAJAT" id="SMP_MTS" style="display: none">SMP/MTS
                                    SEDERAJAT</option>
                                <option value="SMA/SMK SEDERAJAT" id="SMA_SMK" style="display: none">SMA/SMK
                                    SEDERAJAT</option>
                                <option value="MAHASISWA" id="Mahasiswa" style="display: none">MAHASISWA
                                </option>
                                <option value="Guru" id="Guru" style="display: none">Guru</option>
                                <option value="Dosen" id="Dosen" style="display: none">Dosen</option>
                                <option value="Sudah Bekerja" id="Sudah_Bekerja" style="display: none">Sudah
                                    Bekerja</option>
                                <option value="Belum Bekerja" id="Belum_Bekerja" style="display: none">Belum
                                    Bekerja</option>
                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Asal</label>
                            <input type="text" name="asal" value="{{ old('asal') }}" class="form-control">
                            @error('asal')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="container-fluid ">
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
