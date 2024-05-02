<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CN Event</title>
    <link rel="icon" type="image/png" href="assets/img/Logo CN.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@700&family=Montserrat&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/clpse.css">

    <style>
        @media (max-width:990px) {
            body {
                background-image: url('/img/event1.jpeg');
            }
        }

        body {
            background-color: #fff;
            position: fixed;
            width: 100%;
        }

    </style>
</head>

<body>
    <!-- Tampilan Login Diatas 991px -->
    <div class="row">
        <div class="col-7 img-login  d-none d-lg-block" style="height: 100vh;">
            <div class="text">
                <div class="">
                    <img src="/img/event1.jpeg" class="card-img" alt="..." style="height: 100vh;">
                </div>
                <div class="card-img-overlay">
                    <p class="card-judul w-75">Aplikasi Laporan Rapat</p>
                    <div class="smk-cn">
                        <img src="assets/img/Logo CN.png" alt=""> 
                        <span>SMK CITRA NEGARA</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 text-center p-0 d-flex d-none d-lg-block" style="min-height: 100vh;">
            <div class="container-fluid">
            <div class="">

            <div class="p-5">
                <div class="fs-1" style="font-family: 'Baloo Thambi 2', cursive;">
                    Selamat Datang
                </div>
                <div class="fs-5" style="font-family: 'Montserrat', sans-serif;">
                    Silahkan Login Dulu
                </div>

                <div class="inputlog">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="text-start mb-3">
                                <label for="">Username</label>
                            </div>
                            <input type="text" name="username" class="form-control" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <div class="text-start mb-3">
                                <label for="">Password</label>
                            </div>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mt-5 text-start w-full" style="font-family: 'Baloo Thambi 2', cursive;">
                            <button type="submit" class="btn btn-dark w-100 d-grid gap-2">Masuk</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Tampilan Login Dibawah 991px -->
    <div class="d-flex mt-4">
        <div class="container d-block d-lg-none">
            <div class="card">
                <div class="col text-center p-4">
                    <div class="smk-cn-xs">
                        <div class="text-center">
                            <img src="assets/img/Logo CN.png" alt="" class="">
                        </div>
                        <div class="judul">
                            <p>SMK CITRA NEGARA</p>
                        </div>
                    </div>
                    <h4 class="fs-4 mt-4" style="font-family: 'Baloo Thambi 2', cursive;">
                        Selamat Datang
                    </h4>
                    <h6 class="fs-6" style="font-family: 'Montserrat', sans-serif;">
                        Silahkan Login Dulu
                    </h6>
                    
                    <div class="inputlog-xs">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="text-start mb-3">
                                    <label for="">Username</label>
                                </div>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <div class="text-start mb-3">
                                    <label for="">Password</label>
                                </div>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mt-4 text-start row px-2" style="font-family: 'Baloo Thambi 2', cursive;">
                                <button type="submit" class="btn btn-dark">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/js/clpsebar.js"></script>

</html>