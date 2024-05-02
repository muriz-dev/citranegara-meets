@extends('layout.main')

@section('title')
    Daftar Rapat - CN Event
@endsection

@section('header')
    Rapat
@endsection

@section('content')
    <div class="CD3 px-0">
        <div class="d-flex justify-content-center">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($acaras as $acara)   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="gambar" data-bs-toggle="modal" data-bs-target="#gambarModal">
                                @if ($acara->thumbnail != '')
                                    <img src="/storage/{{ $acara->thumbnail }}" class="card-img-top" alt="...">
                                @else
                                    <img src="/img/cn.png" alt="">
                                @endif
                            </div>
                            <div class="card-body overflow-auto">
                                <h5 class="card-title">{{ $acara->nama_acara }}</h5>
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
                                <a href="/acara/{{ $acara->kode_acara }}/pengunjung" class="text-decoration-none">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <button type="button" class="btn1 btn btn-sm text-light mt-2"
                                                style="background-color: #260354;">Daftar
                                                Peserta</button>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- TUTUP LIST ACARA -->
    <!-- PAGINATION DAN BUTTON -->
    <div class="d-flex container-fluid justify-content-center mt-4">
        <div class="row">
            <div class="col">
                {{ $acaras->links('pagination::bootstrap-4') }}
                {{-- <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <span class="page-link">
                                &laquo; </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"> &raquo; </a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>

    <!-- FLOAT BUTTON -->

    <!-- ukuran button di layar 768px keatas -->
    <div class="btnplus d-none d-md-block">
        <a href="/acara/create">
            <button type="button" class="btn rounded-circle text-end" style="background-color: #260354;">
                <i class="fa-solid fa-plus text-light"></i>
            </button>
        </a>
    </div>


    <!-- ukuran button di layar 767px kebawah -->
    <div class="btnplus-sm d-block d-md-none">
        <a href="/acara/create">
            <button type="button" class="btn rounded-circle text-end" style="background-color: #260354;">
                <i class="fa-solid fa-plus text-light"></i>
            </button>
        </a>
    </div>
@endsection

@section('modal')
    {{-- <!-- Modal image -->
    <div class="modal fade" id="gambarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="../../assets/img/event1.jpeg" alt="">
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
                    <a href="../../">
                        <button type="button" class="btn btn-danger">Keluar</button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
