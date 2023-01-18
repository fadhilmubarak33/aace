<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Publikasi dan Kolaborasi</title>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS custom -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-light navbar-light" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="row">
                    <div class="col">
                        <img src="Assets/siskakol.png" id="logo" class="d-inline-block align-top" alt="">
                    </div>
                    <div class="col">
                        <div class="line"></div>
                    </div>
                    <div class="col align-self-center">
                        <img src="Assets/logo-seal (1).png" id="logo" class="d-inline-block align-top logo" alt="">
                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="/penelitian.html" role="button" data-toggle="dropdown" aria-expanded="false">
                          Penelitian
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="penelitian_aplikasigame.html" target="_blank">Sektor Aplikasi & Game</a>
                          <a class="dropdown-item" href="penelitian_kriya.html" target="_blank">Sektor Kriya</a>
                          <a class="dropdown-item" href="penelitian_fashion.html"  target="_blank">Sektor Fashion</a>
                          <a class="dropdown-item" href="penelitian_kuliner.html" target="_blank">Sektor Kuliner</a>
                          <a class="dropdown-item" href="penelitian_animasi.html" target="_blank">Sektor Animasi</a>
                        </div>
                      </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="publikasi_form.html" target="_blank">Publikasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="kolaborasi.html" target="_blank">Kolaborasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Permasalahan</a>
                    </li>
                </ul>

                <a class="login" href="login.html" target="_blank">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="header">
        <div id="carouselheader" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="carousel-bacground" src="Assets/bacground-header-blue.png" alt="..." width="100%"
                        height="600px">
                    <div class="carousel-caption d-md-block">
                        <div class="row header-item">
                            <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                                <div class="text-header">
                                    <h4>Kesempatan untuk mengembangkan usaha anda lebih unggul bersama kami</h4>
                                    <p>Siskakol Menjadi Solusi Real Case Usaha Anda</p>
                                    <h5>Ajukan Penelitian Anda di Periode 1 : Januari - Februari 2023</h5>
                                    <button>Selengkapnya</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12  col-sm-12">
                                <img src="Assets/Business deal-cuate.svg" alt="" class="responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-bacground" src="Assets/bacground-header-blue.png" alt="..." width="100%"
                        height="600px">
                    <div class="carousel-caption d-md-block">
                        <div class="row header-item">
                            <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                                <div class="text-header">
                                    <h4>Rahasia Menjadikan Usaha Anda Lebih Unggul Kini Telah Terungkap!</h4>
                                    <p>Raih Kesempatan Untuk Sekarang</p>
                                    <h5>Ajukan Penelitian Anda di Periode 1 : Januari - Februari 2023</h5>
                                    <button>Selengkapnya</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <img src="Assets/Novelist writing-rafiki.svg" alt="" class="responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="carousel-bacground" src="Assets/bacground-header-green.png" alt="..." width="100%"
                        height="600px">
                    <div class="carousel-caption d-md-block">
                        <div class="row header-item">
                            <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
                                <div class="text-header">
                                    <h4>Bersama Siskakol, Wujudkan Menjadi Nyata Penelitian Anda</h4>
                                    <p>Ajukan Penelitian Anda di Periode 1 : Januari - Februari 2023</p>
                                    <!-- <h5>Priode pengajuan proposal: 15 Desember 2022 - 31 Januari 2023</h5> -->
                                    <button>Selengkapnya</button>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <img src="Assets/Novelist writing-rafiki.svg" alt="" class="responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselheader" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselheader" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Akhir Header -->


    <!-- Perguruan Tinggi -->
    <div class="perguruan-tinggi container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="bacground">
                    <img src="assets/innovator_landing.svg" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <h2>Keuntungan</h2>
                        <p>Lakukan Penelitian langsung dengan Dosen Perguruan Tinggi</p>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <a class="daftar" href="" style="margin-top: 20px;">Daftar</a>
                    </div>
                </div>
                <div class="hori-line" style="margin-top: 20px;"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <section>
                            <img src="assets/USP-Innovator-1.svg" alt="" width="60px" height="60px">
                            <p>Daftar Penelitian Terkait Bidang Usaha</p>
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <section>
                            <img src="assets/USP-Innovator-2.svg" alt="" width="60px" height="60px">
                            <p>Kolaborasi Dengan Akademisi Kota Malang</p>
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <section>
                            <img src="assets/USP-Innovator-3.svg" alt="" width="60px" height="60px">
                            <p>Update Publikasi Jurnal Secara Berkala Dengan Topik Terkait</p>
                        </section>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <section>
                            <img src="assets/USP-Innovator-4.svg" alt="" width="60px" height="60px">
                            <p>Konsultasikan Permasalahan Anda Dengan Kami</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Perguruan Tinggi -->

    <!-- Mitra -->
    <div class="mitra container ">
        <div class="row justify-content-sm-center">
            <div class="col-lg-5  col-md-12 col-sm-12">
                <div class="bacground">
                    <img src="assets/industry_landing.svg" alt="">
                </div>
            </div>
            <div class="col-lg-7  col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-8  col-md-12 col-sm-12">
                        <h2>Mitra</h2>
                        <p>Dunia Usaha dan Dunia Industri (DUDI), Pemerintah, Lembaga Swadaya Masyarakat atau Perguruan
                            Tinggi/Lembaga Riset Luar
                            Negeri
                            Catatan: Dudi, LSM : berbadan hukum</p>
                    </div>
                    <div class="col-lg-4  col-md-12 col-sm-12">
                        <a class="daftar" href="" style="margin-top: 20px;">Daftar</a>
                    </div>
                </div>
                <div class="hori-line" style="margin-top: 20px;"></div>
                <div class="row">
                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <section>
                            <img src="assets/USP-Industry-1.svg" alt="" width="60px" height="60px">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </section>
                    </div>
                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <section>
                            <img src="assets/USP-Industry-3.svg" alt="" width="60px" height="60px">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </section>
                    </div>
                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <section>
                            <img src="assets/USP-Industry-2.svg" alt="" width="60px" height="60px">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </section>
                    </div>
                    <div class="col-lg-6  col-md-12 col-sm-12">
                        <section>
                            <img src="assets/USP-Industry-4.svg" alt="" width="60px" height="60px">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Mitra -->


    <!-- Berkolaborasi -->
    <div class="colab">
        <h2>Daftar Kolaborasi SISKAKOL</h2>

        <!-- Slideshow-->
        <div id="carouselcolab" class="carousel slide" data-interval="false">
            <div class="container-carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="card mt-2" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>Sektor Aplikasi & Game</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Sektor Kriya</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Sektor Kuliner</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Sektor Fashion</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around">
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Sektor Ekonomi</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around">
                            <div class="col-md-3">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev fontIcon align-self-center" href="#carouselcolab" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon size-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next fontIcon align-self-center" href="#carouselcolab" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon size-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: black;">Next</span>
            </a>
        </div>


        <div class="selengkapnya d-flex justify-content-center">
            <a href="">Selengkapnya</a>
        </div>

    </div>
    <!-- Akhir Berkolaborasi -->

    <!-- Inspirasi Solutif -->
    <div class="inspirasi">
        <h2>Inspirasi Solutif dari Siskakol</h2>
        <div id="carouselinspirasi" class="carousel slide" data-interval="false">
            <div class="container-carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-around">
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around">
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-around">
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-2">
                                <div class="card" style="width: 20rem;">
                                    <div class="card-header">
                                        <h4>Pariwisata dan Ekonomi Kreatif</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4>HAI-hospitality analytics insight</h4>

                                        <div class="kutip">
                                            <h4>I Gede Wiwin Suyasa</h4>
                                            <p>Visi Perencana Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev fontIcon align-self-center" href="#carouselinspirasi" role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon size-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next fontIcon align-self-center" href="#carouselinspirasi" role="button"
                data-slide="next">
                <span class="carousel-control-next-icon size-icon" aria-hidden="true"></span>
                <span class="sr-only" style="color: black;">Next</span>
            </a>
        </div>
        <div class="selengkapnya d-flex justify-content-center">
            <a href="">Selengkapnya</a>
        </div>
    </div>
    <!-- Akhir Inspirasi Solutif -->

    <!-- Media -->
    <div class="media container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="inpirasi-kolaborasi">
                    <h2>Inpirasi Siskakol</h2>

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card" style="width: 25rem;">
                                    <img class="card-img-top" src="Assets/1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Kolaborasi Ngalup.co, Mekari dan Kampus UMKM Shoope Malang</h5>
                                        <p class="card-text"> Tak hanya memberikan wadah edukasi untuk perusahaan rintisan
                                            (startup), tetapi juga membuka kesempatan bagi pelaku usaha mikro, kecil dan
                                            menengah (UMKM) untuk berkembang.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="width: 25rem;">
                                    <img class="card-img-top" src="Assets/2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Inovasi FT Universitas Brawijaya Bikin Prototipe Metaverse Kayutangan</h5>
                                        <p class="card-text">Memontum Kota Malang – Inovasi, teknologi dan kewirausahaan adalah bukti dari kemajuan dunia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="width: 25rem;">
                                    <img class="card-img-top" src="Assets/3.jpeg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Inovasi FT Universitas Brawijaya Bikin Prototipe Metaverse Kayutangan</h5>
                                        <p class="card-text">Fakultas Teknik (FT) Universitas
                                            Brawijaya mengadakan FGD Metaverse Kayutangan, Rabu
                                            (30/11/2022).</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-between">
                            <div class="col-4">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active node">
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="node"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="node"></li>
                                </ol>
                            </div>
                            <div class="col">
                                <div class="selengkapnya d-flex justify-content-center">
                                    <a href="">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="liputan-media">
                    <h2>Liputan Media</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="kotak">
                                <p class="sumber">kotamalang.memontum.com</p>
                                <h4 class="judul">
                                    <a href="">Polinema dan Majestic Convex Kolaborasi Wujudkan UMKM Kota Malang Lebih Maju</a>
                                </h4>
                                <p class="tanggal">16 September 2022</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="kotak">
                                <p class="sumber">kumparan.com</p>
                                <h4 class="judul">
                                    <a href="">Kolaborasi Ngalup.co, Mekari dan Kampus UMKM Shoope Malang</a>
                                </h4>
                                <p class="tanggal">16 September 2022</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="kotak">
                                <p class="sumber">suryamalang.tribunnews.com</p>
                                <h4 class="judul">
                                    <a href="">Inovasi FT Universitas Brawijaya Bikin Prototipe Metaverse Kayutangan</a>
                                </h4>
                                <p class="tanggal">16 September 2022</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="kotak">
                                <p class="sumber">kotamalang.memontum.com</p>

                                <h4 class="judul">
                                    <a href="">Polinema dan Majestic Convex Kolaborasi Wujudkan UMKM Kota Malang Lebih Maju</a>
                                </h4>
                                <p class="tanggal">16 September 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Media -->


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5 col-sm-12">
                    <h4>Sistem Informasi Publikasi & Kolaborasi</h4>
                    <p>Academic Association Creative Economy & Malang Creative Center <br>
                        Jalan. A. Yani No.53, Blimbing, Kecamatan Blimbing
Kota Malang, Jawa Timur 65118
Lantai 3
                    </p>

                    <div class="row">
                        <div class="col">
                            <div class="circle">
                                <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="circle">
                                <a href=""><ion-icon name="logo-youtube"></ion-icon></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="circle">
                                <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="circle">
                                <a href=""><ion-icon name="logo-twitter"></ion-icon></ion-icon></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12col">
                            <h4>Tentang</h4>
                            <ul>
                                <li>
                                    <h5><a href="">Tentang</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Home</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Penelitian</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Publikasi</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Kolaborasi</a></h5>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h4>Tautan</h4>
                            <ul>
                                <li>
                                    <h5><a href="">Syarat dan Ketentuan</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Kebijakan Privasi</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Bantuan - Insan PT</a></h5>
                                </li>
                                <li>
                                    <h5><a href="">Bantuan - Mitra</a></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->

   

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- IonIcons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- Slideshow -->
    <script>
        $(".carousel").swipe({
            swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        });
    </script>

</body>

</html>