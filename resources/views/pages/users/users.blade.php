@extends('layout.main')

@section('title')
    Daftar User - CN Event
@endsection

@section('header')
    Daftar User
@endsection

@section('content')
    <div class="container-fluid d-none d-md-block">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-4 user-img">
                                <img src="/img/cn.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="d-flex justify-content-between user-card card-body overflow-auto"
                                    style="max-height: 200px;">
                                    <div>
                                        <h5 class="card-title">Nama Lengkap : </h5>
                                        <h5 class="card-title">{{ $user->nama_lengkap }}</h5>
                                        <p class="card-title mt-4">Username :</p>
                                        <p class="card-title">{{ $user->username }}</p>
                                    </div>
                                    <div class="d-flex flex-row flex-column gap-1">
                                        <a class="btn btn-info" href="/users/{{ $user->id }}/edit" role="button"><i
                                                class="bi bi-pencil-square text-white"></i></a>
                                        <form action="/users/{{ $user->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" href="#"
                                                data-bs-toggle="modal" data-bs-target="#hapusModal" role="button"><i
                                                    class="fa-solid fa-trash-can text-white"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- List User dibawah 576px -->
    <div class="container-fluid d-block d-md-none">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-12 d-flex justify-content-center">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-4 user-img">
                                <img src="/img/cn.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="d-flex justify-content-between user-card card-body overflow-auto"
                                    style="max-height: 200px;">
                                    <div>
                                        <h5 class="card-title">Nama Lengkap : </h5>
                                        <h5 class="card-title">{{ $user->nama_lengkap }}</h5>
                                        <p class="card-title mt-4">Username :</p>
                                        <p class="card-title">{{ $user->username }}</p>
                                    </div>
                                    <div class="d-flex flex-row flex-column gap-1">
                                        <a class="btn btn-info" href="/users/{{ $user->id }}/edit" role="button"><i
                                                class="bi bi-pencil-square text-white"></i></a>
                                        <form action="/users/{{ $user->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" href="#"
                                                data-bs-toggle="modal" data-bs-target="#hapusModal" role="button"><i
                                                    class="fa-solid fa-trash-can text-white"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- End of Cards -->

    <!-- ukuran button di layar 768px keatas -->
    <div class="btnplus d-none d-md-block">
        <a href="/users/create">
            <button type="button" class="btn rounded-circle text-end" style="background-color: #260354;">
                <i class="fa-solid fa-plus text-light"></i>
            </button>
        </a>
    </div>


    <!-- ukuran button di layar 767px kebawah -->
    <div class="btnplus-sm d-block d-md-none">
        <a href="/users/create">
            <button type="button" class="btn rounded-circle text-end" style="background-color: #260354;">
                <i class="fa-solid fa-plus text-light"></i>
            </button>
        </a>
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
                    <a href="../../">
                        <button type="button" class="btn btn-danger">Keluar</button>
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End of Log Out Modal -->

    <!-- Hapus Modal -->
    {{-- <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin yang ini mau diapus?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger">Hapus Data</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End of Hapus Modal -->
@endsection
