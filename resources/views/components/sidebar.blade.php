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
            @if (auth()->user()->role == 'admin')
                <a href="/dashboard">
                    <li class="text">
                        Dashboard
                    </li>
                </a>
            @endif

            <a href="/acara">
                <li class="">
                    Rapat
                </li>
            </a>

            @if (auth()->user()->role == 'admin')
                <a href="/users">
                    <li class="">
                        Users
                    </li>
                </a>
            @endif

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
        @if (auth()->user()->role == 'admin')
            <a href="/dashboard">
                <li class="text">
                    Dashboard
                </li>
            </a>
        @endif

        <a href="/acara">
            <li class="">
                Rapat
            </li>
        </a>

        @if (auth()->user()->role == 'admin')
            <a href="/users">
                <li class="">
                    Users
                </li>
            </a>
        @endif

        <form action="/logout" method="POST" method="post" class="row d-flex justify-content-center">
            @csrf
            <button type="submit" class="logout btn btn-danger btn-block" data-bs-toggle="modal"
                data-bs-target="#logoutModal">Logout</button>
        </form>
    </ul>
</nav>

<!-- TUTUP SIDEBAR -->
