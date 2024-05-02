<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" type="image/png" href="/img/cn.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@700&family=Montserrat&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/clpse.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="d-flex">

        <!-- SIDEBAR DENGAN UKURAN DIATAS 1199PX -->
        <nav class="sidebar-xl d-none d-xl-block">
            <div class="position-fixed">
                <div class="side_header py-3">
                    <div class="text-center">
                        <img src="/img/cn.png" alt="" class="">
                    </div>
                    <div class="judul">
                        <p>SMK CITRA NEGARA</p>
                    </div>
                </div>

                <!--INI LIST MENU SIDEBAR  -->

                <ul class="list-unstyled text-decoration-none">
                    <a href="/dashboard">
                        <li class="text">
                            Dashboard
                        </li>
                    </a>

                    <a href="/acara">
                        <li class="">
                            Rapat
                        </li>
                    </a>

                    <a href="/users">
                        <li class="">
                            Users
                        </li>
                    </a>

                    <form action="/logout" method="POST" method="post" class="row d-flex justify-content-center">
                        @csrf
                        <button type="submit" class="logout btn btn-danger btn-block" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">Logout</button>
                    </form>
                </ul>
            </div>
        </nav>



        <!-- SIDEBAR DENGAN UKURAN DIBAWAH 1199PX -->

        <nav class="sidebar d-xl-none">

            <div class="side_header py-3">
                <i class="fa-solid fs-1 fa-xmark close-btn text-danger">
                </i>
                <div class="text-center">
                    <img src="/img/cn.png" alt="" class="">
                </div>
                <div class="judul">
                    <p>SMK CITRA NEGARA</p>
                </div>
            </div>


            <!--INI LIST MENU SIDEBAR  -->

            <ul class="list-unstyled text-decoration-none">
                <a href="/dashboard">
                    <li class="text">
                        Dashboard
                    </li>
                </a>

                <a href="/acara">
                    <li class="">
                        Rapat
                    </li>
                </a>

                <a href="/users">
                    <li class="">
                        Users
                    </li>
                </a>

                <form action="/logout" method="POST" method="post" class="row d-flex justify-content-center">
                    @csrf
                    <button type="submit" class="logout btn btn-danger btn-block" data-bs-toggle="modal"
                        data-bs-target="#logoutModal">Logout</button>
                </form>
            </ul>
        </nav>

        <!-- TUTUP SIDEBAR -->
        <!-- BAGIAN KONTEN -->

        <div class="konten" id="konten">

            <!-- INI NAVBAR -->

            <nav class="navbar bg-body-tertiary shadow mb-3 bg-body-tertiary">
                <div class="container-fluid">
                    <div class="clpsebar d-block d-xl-none open-btn">
                        <i class="iconbar bi bi-list"></i>
                    </div>
                    <div class="text_nav container-fluid">
                        <h5 class="ms-3 mt-2" style="font-family: 'Montserrat', sans-serif;">Home</h5>
                    </div>
                </div>
            </nav>

            <!-- TUTUP NAVBAR -->
            <!-- BAGIAN DATA -->

            <div class="CD1">
                {{-- {{ dd($pengunjungByStatus) }} --}}
                <div class="d-flex justify-content-center px-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="ja col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col px-3 py-2">
                                                <h6 class="card-title text-white">Jumlah Rapat</h6>
                                                <h3 class="card-text text-white mt-3">{{ count($acara) }}
                                                </h3>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex justify-content-end">
                                                    <i
                                                        class="fa-regular fa-calendar fs-3 rounded bg-body-tertiary p-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pti col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col px-3 py-2">
                                                <h6 class="card-title text-white">Peserta Tahun Ini</h6>
                                                <h3 class="card-text text-white mt-3">{{ count($pengunjung) }}
                                                </h3>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex justify-content-end">
                                                    <i class="fa-solid fa-users fs-3 rounded bg-body-tertiary p-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="jt col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col px-3 py-2">
                                                <h6 class="card-title text-white">Jumlah Tamu</h6>
                                                <h3 class="card-text text-white mt-3">{{ count($tamu) }}
                                                </h3>
                                            </div>
                                            <div class="col-3">
                                                <div class="d-flex justify-content-end">
                                                    <i class="fa-solid fa-user fs-3 rounded bg-body-tertiary p-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- TUTUP DATA -->

            <!-- BAGIAN GRAFIK -->

            <!-- Grafik ukuran diatas 768px -->
            <div class="d-none d-lg-block CD2 mt-4">
                <div class="d-flex justify-content-center px-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="hd_grp card-header">
                                        Jumlah Peserta Tahun Ini
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="chart" style="height: 300px;">
                                                <canvas id="grafik"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="hd_grp card-header">
                                        Rata Rata Peserta
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="chart py-2" style="min-height: 300px;">
                                                <canvas id="donat"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Ukuran Grafik Dibawah 768px -->
            <div class="d-block d-lg-none CD2 mt-4">
                <div class="d-flex justify-content-center px-3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-7 d-none d-sm-block d-lg-none">
                                <div class="card">
                                    <div class="hd_grp card-header">
                                        Jumlah Peserta Tahun Ini
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="chart" style="height: 300px;">
                                                <canvas id="grafik-sm"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 d-none d-sm-block d-lg-none">
                                <div class="card">
                                    <div class="hd_grp card-header">
                                        Rata Rata Peserta
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="chart py-2" style="height: 300px;">
                                                <canvas id="donat-sm"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TUTUP GRAFIK -->

            <!-- Ukuran Grafik Maksimal 425px -->
            <div class="d-block d-lg-none CD2 mt-3">
                <div class="d-flex justify-content-center px-3">
                    <div class="container-fluid">
                        <div class="col-12 d-block d-sm-none">
                            <div class="card">
                                <div class="hd_grp card-header">
                                    Rata Rata Peserta
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="chart">
                                            <canvas id="donat-xs"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- TUTUP GRAFIK -->

        <!-- TUTUP BAGIAN DATA -->

        <!-- Modal Untuk Log Out -->
        {{-- <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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


</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/clpsebar.js"></script>
<script>
    const ctx = document.getElementById('grafik');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Jumlah Peserta',
                data: [
                    {{ isset($pengunjungByMonth['Jan']) ? count($pengunjungByMonth['Jan']) : 0 }},
                    {{ isset($pengunjungByMonth['Feb']) ? count($pengunjungByMonth['Feb']) : 0 }},
                    {{ isset($pengunjungByMonth['Mar']) ? count($pengunjungByMonth['Mar']) : 0 }},
                    {{ isset($pengunjungByMonth['Apr']) ? count($pengunjungByMonth['Apr']) : 0 }},
                    {{ isset($pengunjungByMonth['May']) ? count($pengunjungByMonth['May']) : 0 }},
                    {{ isset($pengunjungByMonth['Jun']) ? count($pengunjungByMonth['Jun']) : 0 }},
                    {{ isset($pengunjungByMonth['Jul']) ? count($pengunjungByMonth['Jul']) : 0 }},
                    {{ isset($pengunjungByMonth['Aug']) ? count($pengunjungByMonth['Aug']) : 0 }},
                    {{ isset($pengunjungByMonth['Sep']) ? count($pengunjungByMonth['Sep']) : 0 }},
                    {{ isset($pengunjungByMonth['Oct']) ? count($pengunjungByMonth['Oct']) : 0 }},
                    {{ isset($pengunjungByMonth['Nov']) ? count($pengunjungByMonth['Nov']) : 0 }},
                    {{ isset($pengunjungByMonth['Dec']) ? count($pengunjungByMonth['Dec']) : 0 }},
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                },
            }

        }
    });
</script>


<script>
    const pie = document.getElementById('donat');
    new Chart(pie, {
        type: 'doughnut',
        data: {
            labels: ['SMP/MTS SEDERAJAT', 'SMA/SMK SEDERAJAT', 'MAHASISWA', 'Guru', 'Dosen', 'Sudah Bekerja',
                'Belum Bekerja'
            ],
            datasets: [{
                label: 'Peserta',
                data: [
                    {{ isset($pengunjungByStatus['SMP/MTS SEDERAJAT']) ? count($pengunjungByStatus['SMP/MTS SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['SMA/SMK SEDERAJAT']) ? count($pengunjungByStatus['SMA/SMK SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['MAHASISWA']) ? count($pengunjungByStatus['MAHASISWA']) : 0 }},
                    {{ isset($pengunjungByStatus['Guru']) ? count($pengunjungByStatus['Guru']) : 0 }},
                    {{ isset($pengunjungByStatus['Dosen']) ? count($pengunjungByStatus['Dosen']) : 0 }},
                    {{ isset($pengunjungByStatus['Sudah Bekerja']) ? count($pengunjungByStatus['Sudah Bekerja']) : 0 }},
                    {{ isset($pengunjungByStatus['Belum Bekerja']) ? count($pengunjungByStatus['Belum Bekerja']) : 0 }},
                ],
                borderWidth: 3,

            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'OI BANG'
                }
            }
        }
    });
</script>

<script>
    const ctxsm = document.getElementById('grafik-sm');

    new Chart(ctxsm, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Jumlah Peserta',
                data: [
                    {{ isset($pengunjungByMonth['Jan']) ? count($pengunjungByMonth['Jan']) : 0 }},
                    {{ isset($pengunjungByMonth['Feb']) ? count($pengunjungByMonth['Feb']) : 0 }},
                    {{ isset($pengunjungByMonth['Mar']) ? count($pengunjungByMonth['Mar']) : 0 }},
                    {{ isset($pengunjungByMonth['Apr']) ? count($pengunjungByMonth['Apr']) : 0 }},
                    {{ isset($pengunjungByMonth['May']) ? count($pengunjungByMonth['May']) : 0 }},
                    {{ isset($pengunjungByMonth['Jun']) ? count($pengunjungByMonth['Jun']) : 0 }},
                    {{ isset($pengunjungByMonth['Jul']) ? count($pengunjungByMonth['Jul']) : 0 }},
                    {{ isset($pengunjungByMonth['Aug']) ? count($pengunjungByMonth['Aug']) : 0 }},
                    {{ isset($pengunjungByMonth['Sep']) ? count($pengunjungByMonth['Sep']) : 0 }},
                    {{ isset($pengunjungByMonth['Oct']) ? count($pengunjungByMonth['Oct']) : 0 }},
                    {{ isset($pengunjungByMonth['Nov']) ? count($pengunjungByMonth['Nov']) : 0 }},
                    {{ isset($pengunjungByMonth['Dec']) ? count($pengunjungByMonth['Dec']) : 0 }},
                ],
                borderWidth: 3
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                },
            }

        }
    });
</script>


<script>
    const piesm = document.getElementById('donat-sm');
    new Chart(piesm, {
        type: 'doughnut',
        data: {
            labels: ['SMP/MTS SEDERAJAT', 'SMA/SMK SEDERAJAT', 'MAHASISWA', 'Guru', 'Dosen', 'Sudah Bekerja',
                'Belum Bekerja'
            ],
            datasets: [{
                label: '# of Votes',
                data: [
                    {{ isset($pengunjungByStatus['SMP/MTS SEDERAJAT']) ? count($pengunjungByStatus['SMP/MTS SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['SMA/SMK SEDERAJAT']) ? count($pengunjungByStatus['SMA/SMK SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['MAHASISWA']) ? count($pengunjungByStatus['MAHASISWA']) : 0 }},
                    {{ isset($pengunjungByStatus['Guru']) ? count($pengunjungByStatus['Guru']) : 0 }},
                    {{ isset($pengunjungByStatus['Dosen']) ? count($pengunjungByStatus['Dosen']) : 0 }},
                    {{ isset($pengunjungByStatus['Sudah Bekerja']) ? count($pengunjungByStatus['Sudah Bekerja']) : 0 }},
                    {{ isset($pengunjungByStatus['Belum Bekerja']) ? count($pengunjungByStatus['Belum Bekerja']) : 0 }},
                ],
                borderWidth: 3,

            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'OI BANG'
                }
            }
        }
    });
</script>

<script>
    const piexs = document.getElementById('donat-xs');
    new Chart(piexs, {
        type: 'doughnut',
        data: {
            labels: ['SMP/MTS SEDERAJAT', 'SMA/SMK SEDERAJAT', 'MAHASISWA', 'Guru', 'Dosen', 'Sudah Bekerja',
                'Belum Bekerja'
            ],
            datasets: [{
                label: '# of Votes',
                data: [
                    {{ isset($pengunjungByStatus['SMP/MTS SEDERAJAT']) ? count($pengunjungByStatus['SMP/MTS SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['SMA/SMK SEDERAJAT']) ? count($pengunjungByStatus['SMA/SMK SEDERAJAT']) : 0 }},
                    {{ isset($pengunjungByStatus['MAHASISWA']) ? count($pengunjungByStatus['MAHASISWA']) : 0 }},
                    {{ isset($pengunjungByStatus['Guru']) ? count($pengunjungByStatus['Guru']) : 0 }},
                    {{ isset($pengunjungByStatus['Dosen']) ? count($pengunjungByStatus['Dosen']) : 0 }},
                    {{ isset($pengunjungByStatus['Sudah Bekerja']) ? count($pengunjungByStatus['Sudah Bekerja']) : 0 }},
                    {{ isset($pengunjungByStatus['Belum Bekerja']) ? count($pengunjungByStatus['Belum Bekerja']) : 0 }},
                ],
                borderWidth: 3,

            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'OI BANG'
                }
            }
        }
    });
</script>

</html>
