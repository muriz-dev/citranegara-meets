@extends('layout.main')

@section('title')
    Peserta Rapat - CN Event
@endsection

@section('header')
    Detail Rapat
@endsection

@section('content')
    <div class="container-fluid">
        <div class="daftar_pengunjung card">
            <div class="card">
                <div class="d-block d-md-none text-center p-3"
                    style="background-color: #e5e5e5; font-family: 'Baloo Thambi 2', cursive;">
                    <h1>{{ $acara->nama_acara }}</h1>
                </div>
                <div class="card-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-9 d-none d-md-block">
                                <div class="info">
                                    <div class="" style="font-family: 'Baloo Thambi 2', cursive;">
                                        <h4>{{ $acara->nama_acara }}</h4>
                                    </div>
                                    <div class="fs-6">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>{{ $acara->lokasi }}</span>
                                    </div>
                                    <div class="fs-6">
                                        <i class="fa-solid fa-map"></i>
                                        <span>{{ $acara->alamat }}</span>
                                    </div>
                                    <div class="fs-6">
                                        <i class="bi bi-calendar-date"></i>
                                        <span>{{ $acara->tanggal_mulai }} - {{ $acara->tanggal_selesai }}</span>
                                    </div>
                                    <div class="fs-6">
                                        <i class="bi bi-alarm-fill"></i>
                                        <span>{{ $acara->waktu_mulai }} - {{ $acara->waktu_selesai }}</span>
                                    </div>
                                </div>
                            </div>


                            <!-- br code tampilan diatas 450px -->

                            <div class="d-none d-md-block col-3">
                                <div class="d-flex justify-content-end mt-2">
                                    <img src="/storage/{{ $acara->qrcode }}" width="50%">
                                </div>
                            </div>


                            <!-- br code tampilan dibawah 450px -->
                            <div class="d-block d-md-none col-12 mt-3">
                                <div class="d-flex justify-content-center">
                                    <img src="/storage/{{ $acara->qrcode }}" width="100%">
                                </div>
                            </div>

                        </div>


                        <!-- download diatas 450px -->
                        <div class="row">
                            <div class="col-12 d-none d-md-block">
                                <a href="/acara/{{ $acara->kode_acara }}/download">
                                    <div class="dow-br_code">
                                        <div class="icon1">
                                            <i class="fa-solid fa-arrow-down-long"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <!-- crud daftar pengunjung diatas 450px -->
                        <div class="row">
                            <div class="col-10 d-none d-md-block">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex gap-2">
                                        <a href="/acara/{{ $acara->kode_acara }}/edit">
                                            <button type="button" class="btn btn-info btn-sm px-4 text-light">Ubah
                                                Detail Rapat</button>
                                        </a>
                                        <form action="/acara/{{ $acara->kode_acara }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm px-4 text-light">Hapus
                                                Rapat</button>
                                        </form>
                                        <a href="/acara/{{ $acara->kode_acara }}/pengunjung/create">
                                            <button type="button" class="btn btn-sm text-end text-light px-4"
                                                style="background-color: #260354;">
                                                Tambah Peserta
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- download dibawah 450px -->
                        <div class="col-12 d-block d-md-none">
                            <a href="/acara/{{ $acara->kode_acara }}/download">
                                <div class="d-flex justify-content-center mt-3">
                                    <div class="icon1-sm">
                                        <i class="fs-1 fa-solid fa-arrow-down-long"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <!-- crud daftar pengunjung dibawah 450px -->

                    <div class="row mt-4">
                        <div class="d-md-none d-block">
                            <div class="px-3">
                                <div class="ud1">
                                    <div class="row">
                                        <button type="button" class="btn btn-danger btn-sm px-4 text-light"
                                            data-bs-toggle="modal" data-bs-target="#detailacaraModal">Detail
                                            Rapat</button>
                                    </div>
                                    <a href="/acara/{{ $acara->kode_acara }}/edit" class="text-decoration-none">
                                        <div class="row mb-2">
                                            <button type="button" class="btn btn-info btn-sm mt-2 px-4 text-light">Ubah
                                                Detail Rapat</button>
                                        </div>
                                    </a>

                                    <a href="/acara/{{ $acara->kode_acara }}/pengunjung/create" class="text-decoration-none">
                                        <div class="row my-2">
                                            <button type="button" class="btn btn-sm text-center text-light px-4"
                                                style="background-color: #260354;">
                                                Tambah Peserta
                                            </button>
                                        </div>
                                    </a>
                                    <div class="row w-full">
                                        <form action="/acara/{{ $acara->kode_acara }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="w-100 btn btn-danger btn-sm text-light"
                                                data-bs-toggle="modal" data-bs-target="#hapusacaraModal">Hapus
                                                Rapat</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="garis3">
                            <hr>
                        </div>
                    </div>
                    <div class="card-body overflow-auto" style="max-height: 300px;">
                        <div class="mb-3">
                            <div class="dow_lap d-none d-md-block">
                                <div class="px-2">
                                    <h5 class="card-title">Cetak Laporan</h5>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center">
                                            <a href="/pengunjung/{{ $acara->kode_acara }}/export">
                                                <button type="button" class="btn btn-success btn-sm px-4 text-light"><i
                                                        class="fa-solid fa-file-excel"></i>
                                                    <span>Excel</span></button>
                                            </a>
                                            {{-- <a href="../../update-pengunjung/" class="mx-1">
                                                <button type="button" class="btn btn-danger btn-sm px-4 text-light"><i
                                                        class="fa-solid fa-file-pdf"></i>
                                                    <span>PDF</span></button>
                                            </a>
                                            <a href="../../update-pengunjung/">
                                                <button type="button" class="btn btn-primary btn-sm px-4 text-light"><i
                                                        class="fa-solid fa-print"></i>
                                                    <span>Print</span></button>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table text-center">
                            <div class="heading">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Asal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            </div>
                            <tbody>
                                @foreach ($pengunjung as $pengunjung)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $pengunjung->nama_lengkap }}</td>
                                        <td>{{ $pengunjung->telepon }}</td>
                                        <td>{{ $pengunjung->email }}</td>
                                        <td>{{ $pengunjung->status }}</td>
                                        <td>{{ $pengunjung->asal }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a
                                                    href="/acara/{{ $acara->kode_acara }}/pengunjung/{{ $pengunjung->id }}/edit">
                                                    <button type="button" class="btn btn-info btn-sm px-4 text-light"><i
                                                            class="fa-solid fa-pen-to-square"></i></button>
                                                </a>
                                                <form
                                                    action="/acara/{{ $acara->kode_acara }}/pengunjung/{{ $pengunjung->id }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm px-4 text-light"><i class="fa-solid fa-trash-can"></i></button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cetak laporan -->
    <div class="dow_lap d-block d-md-none mt-3">
        <div class="card px-2">
            <h5 class="card-title">Cetak Laporan</h5>
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <a href="/pengunjung/{{ $acara->kode_acara }}/export">
                        <button type="button" class="btn btn-success btn-sm px-4 text-light"><i
                                class="fa-solid fa-file-excel"></i>
                            <span>Excel</span></button>
                    </a>
                    {{-- <a href="../../update-pengunjung/" class="mx-1">
                        <button type="button" class="btn btn-danger btn-sm px-4 text-light"><i
                                class="fa-solid fa-file-pdf"></i>
                            <span>PDF</span></button>
                    </a>
                    <a href="../../update-pengunjung/">
                        <button type="button" class="btn btn-primary btn-sm px-4 text-light"><i
                                class="fa-solid fa-print"></i>
                            <span>Print</span></button> --}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal image -->
    {{-- <div class="modal fade" id="brcodeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="../../../assets/img/cobascan.png" alt="">
            </div>
        </div>
    </div> --}}

    <!-- Modal untuk Hapus pengunjung -->
    {{-- <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin hapus data Sutan Pangeran Arya Dewa
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus Data</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Modal Untuk Detail Rapat -->
    <div class="modal fade" id="detailacaraModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Rapat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body overflow-auto">
                    <div class="row">
                        <img src="/storage/{{ $acara->thumbnail }}" style="max-height: 200px;">
                        <div class="info mt-3">
                            <div style="font-family: 'Baloo Thambi 2', cursive;">
                                <h4>{{ $acara->nama_acara }}</h4>
                            </div>
                            <div class="fs-6">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>{{ $acara->lokasi }}</span>
                            </div>
                            <div class="fs-6">
                                <i class="fa-solid fa-map"></i>
                                <span>{{ $acara->alamat }}</span>
                            </div>
                            <div class="fs-6">
                                <i class="bi bi-calendar-date"></i>
                                <span>{{ $acara->tanggal_mulai }} - {{ $acara->tanggal_selesai }}</span>
                            </div>
                            <div class="fs-6">
                                <i class="bi bi-alarm-fill"></i>
                                <span>{{ $acara->waktu_mulai }} - {{ $acara->waktu_selesai }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Oke</button>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Modal untuk Hapus acara -->
    <div class="modal fade" id="hapusacaraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin hapus acara ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus Data</button>
                </div>
            </div>
        </div>
    </div> --}}

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
