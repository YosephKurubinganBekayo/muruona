<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desa Muruona</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <a class="navbar-brand" href="#">Desa Muruona</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contact</a>
          </li>
          <li class="tombol">
            <a class="nav-link btn btn-warning btn-sm tombol" href="#" data-bs-toggle="modal" data-bs-target="#myModal">
              <i style="font-size:18px" class="fa">&#xf090;</i> Sign In</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h4 class="display-5">menjadi yang <span>terdepan</span> dengan <span>kerja keras</span></h1>
    </div>
  </div>

  <div class="container">

    <div class="row justified-content-center">
      <div class="col-10 info-panel">
        <div class="row">

          <div class="col-lg">
            <a href="menu/traktor.php">
              <span><i class='fas fa-tractor float-left' style='font-size:50px'>
                </i></span>
              <span>
                <h4>sewa Traktor</h4>
                <p>Ketuk Untuk Penyewaan</p>
              </span>
            </a>
          </div>

          <div class="col-lg ">
            <a href="menu/lapangan.php">
              <span><i class='fas fa-futbol float-left' style='font-size:50px'>
                </i></span>
              <span>
                <h4>Sewa Lapangan</h4>
                <p>Ketuk Untuk Penyewaan</p>
              </span>
            </a>
          </div>

          <div class="col-lg ">
            <a href="menu/air.php">
              <span><i class='fas fa-water float-left' style='font-size:50px'>
                </i></span>
              <span>
                <h4>Pembayaran Air</h4>
                <p>Ketuk Untuk Pembayaran</p>
              </span>
            </a>
          </div>

        </div>

      </div>

    </div>
  </div>


  <!-- The Modal -->
  <div class="modal fade" id="myModal">



    <div class="modal-dialog ">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">

          <h4 class="modal-title text text-center ">Selamat Datang Silahkan Login Utnuk Megakses Halaman Anda</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="ceklogin.php">

            <div class="mb-4">

              <label for="exampleInputEmail1" class="form-label"></label>


              <label for="exampleInputEmail1" class="form-label">Email </label>
              <input required type="email" class="form-control" name="email" placeholder="masukan email">

            </div>

            <div class="mb-2">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input required type="password" class="form-control" name="pass" placeholder="masukan password">
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary " value="login">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
          </form>
        </div>

      </div>
    </div>
  </div>


</body>

</html>