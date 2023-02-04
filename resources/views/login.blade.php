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
                        <a class="nav-link" href="home">Home</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="/penelitian.html" role="button" data-toggle="dropdown" aria-expanded="false">
                          Penelitian
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="penelitian-aplikasigame" target="_blank">Sektor Aplikasi & Game</a>
                            <a class="dropdown-item" href="penelitian-kriya" target="_blank">Sektor Kriya</a>
                            <a class="dropdown-item" href="penelitian-fashion"  target="_blank">Sektor Fashion</a>
                            <a class="dropdown-item" href="penelitian-kuliner" target="_blank">Sektor Kuliner</a>
                            <a class="dropdown-item" href="penelitian-animasi" target="_blank">Sektor Animasi</a>

                        </div>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="form-publikasi" target="_blank">Publikasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="kolaborasi" target="_blank">Kolaborasi</a>
                    </li>
                    <!--li class="nav-item active">
                        <a class="nav-link" href="#">Permasalahan</a>
                    </!--li-->
                </ul>

                <a class="login" href="" data-toggle="modal" data-target="#exampleModalCenter">Masuk</a>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <center style="color: #0000EE"> <h3>Masuk</h3> </center>

                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kata Sandi</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <center><p>Lupa kata sandi ? <a href="" style="color: #0000EE;">Atur ulang</a></p></center>
                            <center><p>Dengan mengklik tombol “Masuk” anda setuju dengan
                               <span style="color: #0000EE;"> Syarat & Ketentuan Kebijakan Privasi</span></p></center>

                              <center> <button class="btn btn-primary">Masuk</button></center>
                        </form>

                    </div>
                </div>
                <br>
                <center><p>Belum punya akun ? <a href="register_page.html" style="color: #0000EE;">Daftar disini</a> </p></center>

            </div>
        </div>
    </div>


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
