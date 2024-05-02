<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Rapat</title>
    <link rel="icon" type="image/png" href="/img/cn.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@700&family=Montserrat&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/clpse.css">
    <style>
        body {
            background: url("/img/cartoon-city.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>


    <!-- tampilan registrasi dibawah 768px -->
    <div class="konten d-block d-lg-none">
        <!-- BAGIAN KONTEN -->

        <div class="container">
            <div class="regis text-center text-white mt-3 mb-3">
                <h1 style="text-shadow: 2px 2px #000000;">Registrasi Rapat</h1>
            </div>
            <div class="">
                <div class="card rounded-4">
                    <div class="card-body">
                        <form action="/acara/{{ $acara->kode_acara }}/registrasi" method="POST" class="form1">
                            @csrf
                            <input type="hidden" name="kode_acara" value="{{ $acara->kode_acara }}">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control"
                                    value="{{ old('nama_lengkap') }}" autocomplete="off">
                                @error('nama_lengkap')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                                <input type="tel" name="telepon" class="form-control" value="{{ old('telepon') }}"
                                    autocomplete="off">
                                @error('telepon')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    autocomplete="off">
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
                                <select name="status" id="StatusDropdown" class="form-select" style="display: none"
                                    required>
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
                                <label for="exampleInputPassword" class="form-label">Asal</label>
                                <input type="text" name="asal" class="form-control"
                                    value="{{ old('asal') }}" autocomplete="off">
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
    </div>
    <!-- TUTUP KONTEN -->


    <!-- tampilan regis diatas 768px -->
    <div class="konten d-none d-lg-block h-75">
        <!-- BAGIAN KONTEN -->

        <div class="container w-50">
            <div class="regis text-center text-white mt-3 mb-3">
                <h1 style="text-shadow: 2px 2px #000000;">Registrasi Rapat</h1>
            </div>
            <div class="px-5">
                <div class="card rounded-4 p-3">
                    <div class="card-body">
                        <form action="/acara/{{ $acara->kode_acara }}/registrasi" method="POST" class="form1">
                            @csrf
                            <input type="hidden" name="kode_acara" value="{{ $acara->kode_acara }}">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp"
                                    value="{{ old('nama_lengkap') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
                                <input type="tel" name="telepon" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('telepon') }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="mb-3">
                                <label for="ProfilDropdown2" class="form-label">Profil</label>
                                <select class="form-select" name="profil" id="ProfilDropdown2">
                                    <option selected disabled hidden>Pilih...</option>
                                    <option value="Pelajar">Pelajar</option>
                                    <option value="Pengajar">Pengajar</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label id="LabelStatus2" style="display: none">Status</label>
                                <select name="status" id="StatusDropdown2" class="form-select" style="display: none"
                                    required>
                                    <option value="SMP/MTS SEDERAJAT" id="SMP_MTS2" style="display: none">SMP/MTS
                                        SEDERAJAT</option>
                                    <option value="SMA/SMK SEDERAJAT" id="SMA_SMK2" style="display: none">SMA/SMK
                                        SEDERAJAT</option>
                                    <option value="MAHASISWA" id="Mahasiswa2" style="display: none">MAHASISWA
                                    </option>
                                    <option value="Guru" id="Guru2" style="display: none">Guru</option>
                                    <option value="Dosen" id="Dosen2" style="display: none">Dosen</option>
                                    <option value="Sudah Bekerja" id="Sudah_Bekerja2" style="display: none">Sudah
                                        Bekerja</option>
                                    <option value="Belum Bekerja" id="Belum_Bekerja2" style="display: none">Belum
                                        Bekerja</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Asal</label>
                                <input type="text" name="asal" class="form-control" id="exampleInputPassword1"
                                    value="{{ old('asal') }}">
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
    </div>
    <!-- TUTUP KONTEN -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/clpsebar.js"></script>
</body>

</html>
