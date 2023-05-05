<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css" type="text/css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>style.css" />

    <title>SPPRJ | KLINIK BASMALAH PACITAN</title>
  </head>
  <body id="home">
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="<?php echo base_url () ?>images/logoklinik.png" alt="" width="30" height="24" class="d-inline-block align-text-top" /> SPPRJ | <b>KLINIK BASMALAH PACITAN</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Akhir Navbar-->



  <!--tampilan baru-->
    <div class="container">
        <div class="row text-center mb-3">    <!-- welcome-->
          <div class="col">
            <h2>Alamat dan Telepon</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-6">
          <section class="jumbotron text-center">
              <img src="<?php echo base_url () ?>images/logoklinik.png" alt="Dokter" width="225" class="rounded-circle img-thumbnail" />
              <h2 class="display-4">Selamat Datang Admin!</h2>
              <marquee>
              <p class="lead"><b>Sistem Pendaftaran Pasien Rawat Jalan Berbasis Web | Klinik Basmalah Pacitan</b></p>
            </marquee>        
          </section>
              </div>
              <div class="col-md-6">
        <section id="login">                       <!-- login-->
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col">
                <h1>Login</h1>
                <?php echo $this->session->flashdata('pesan') ?>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-6">
                <form method="post" action="<?php echo base_url('administrator/auth/proses_login') ?>" class="user">
                  <div class="mb-3">
                    <br>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="username" name="username">
                    <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword" name="password">
                    <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>') ?>
                  </div>
                  <br>
                  <button class="btn btn-primary">Login</button>
                </form>
              </div>
            </div>
          </div>
        </section>
          </div>
        </div>
      </div>
  <!--tampilan baru-->

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#212529"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>

    <!-- Footer -->
    <footer class="bg-dark text-white fw-bold text-center pb-5">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Alamat dan Telepon</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Jl.Nasional 3 Dsn.Krajan Ds.Gendaran Rt.02 Rw.03 Kec.Donorojo Kab.Pacitan Jawa Timur</p>
          </div>
          <div class="col-md-4">
            <p>081357267496</p>
          </div>
        </div>
      </div>
      <br><br><br><p>Created by Elvira Dwi Krisnawanti</p>
    </footer>
    <!-- Akhir Footer -->

    <script type="text/javascript" src="<?php echo base_url () ?> bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>