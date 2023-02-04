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
                            <a class="dropdown-item" href="penelitian_aplikasigame.html" target="_blank">Sektor Aplikasi & Game</a>
                            <a class="dropdown-item" href="penelitian_kriya.html" target="_blank">Sektor Kriya</a>
                            <a class="dropdown-item" href="penelitian_fashion.html"  target="_blank">Sektor Fashion</a>
                            <a class="dropdown-item" href="penelitian_kuliner.html" target="_blank">Sektor Kuliner</a>
                            <a class="dropdown-item" href="penelitian_animasi.html" target="_blank">Sektor Animasi</a>

                        </div>
                      </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Publikasi</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="kolaborasi.html">Kolaborasi</a>
                    </li>
                    <!--li class="nav-item active">
                        <a class="nav-link" href="#">Permasalahan</a>
                    </!--li-->
                </ul>

                <a class="login" href="login" target="_blank">Masuk</a>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-top: 200px;">
        <div class="row">
            <div class="offset-md-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <center style="color: #000"> <h3>Form<br />
                            Publikasi Penelitian</h3> </center>

                        <form>
                            <div class="form-group">
                                <input type="name" class="form-control" id="name"
                                    aria-describedby="name" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="instansi" class="form-control" id="instansi"
                                    aria-describedby="instansi" placeholder="Instansi">
                            </div>
                            <div class="form-group">
                                <input type="judul" class="form-control" id="judul"
                                    aria-describedby="judul" placeholder="Judul Penelitian">
                            </div>
                            <div class="form-group">
                                <input type="tanggal" class="form-control" id="tanggal"
                                    aria-describedby="tanggal" placeholder="Tanggal Terbit">
                            </div>
                            <div class="form-group">
                                <select type="kategori" class="form-control" id="kategori"
                                    aria-describedby="kategori">
                                    <option>Kategori</option>

                                    <option>Sektor Animasi</option>
                                    <option>Sektor Kriya</option>
                                    <option>Sektor Aplikasi&Game</option>
                                    <option>Sektor Fashion</option>
                                    <option>Sektor Kuliner</option>
                                </select>
                            </div>
                            <input type="file" name="file" id="file" style="display:none" />
                            <div class="form-group row">
                                <div class="col-6">
                                    <label>Upload</label>
                                    <div class="upload" style="border:1px solid #000;border-radius:10px; padding: 20px;">
                                        <center><img src="Assets/upload.png" style="cursor:pointer" onclick="$('#file').trigger('click');" /></center>
                                    </div>
                                    <small id="filename"></small>
                                </div>
                            </div>
                            <center>
                                <input type="submit" class="btn btn-primary" value="Kirim">
                            </center>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

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
        $("#file").change(function(a,b,c){
            var file = $(this)[0].files[0];
            $("#filename").html(file.name + " size: "+file.size+" byte");
        })
    </script>

    </body>
