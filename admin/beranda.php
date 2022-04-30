<?php
session_start();

if ($_SESSION['mm status'] != "login") {
  header("location:../index.php");
  exit;
}

include '../fungsi/konektor.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>website desa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <head>
    <title>website desa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
  </head>

<body>


  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Desa Muruona</a>
      <a onclick="return confirm('Yakin ingin Logout..?');" href="../fungsi/logout.php" class="btn btn-mx btn-warning tombol"><i style="font-size:18px" class="fa">&#xf122;</i> Logut </button></a>
    </div>
  </nav>
  <div class="container "><br>
    <!-- Nav tabs -->
    <center>
      <h3>Halaman Admin</h3>
    </center>
    <br>
    <ul class="nav nav-tabs">

      <li class="nav-item ">
        <a class="nav-link  <?php if ($_GET['m'] == '1') {
                              echo 'active';
                            } else {
                              echo 'unactive';
                            } ?> " data-bs-toggle="tab" href="#home">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['m'] == '2') {
                              echo 'active';
                            } ?>" data-bs-toggle="tab" href="#menu1">Perangkat Desa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['m'] == '3') {
                              echo 'active';
                            } ?>" data-bs-toggle="tab" href="#menu2">Kepala Keluarga</a>
      </li>
    </ul>
  </div>
  <!-- Tab panes -->
  <div class="tab-content ">

    <br>
    <div class="tab-pane continer <?php if ($_GET['m'] == '1') {
                                    echo 'active';
                                  } ?>" id="home">
      <div class="container">
        <i><input class="form-control cari" id="myinputhome" type="text" placeholder="Cari data.."></i><br>

        <div class="table-responsive">
          <table class="table table-striped table-hover table-sm " id="mytabelhome">
            <thead>
              <tr>
                <th>NO</th>
                <th>Nama </th>
                <th>Tanggal lahir </th>
                <th>Tempat Lahir</th>
                <th>Telepon </th>
                <th>Email</th>
                <th>pasword</th>
                <th class="text text-center">
                  <a class="btn btn-mx btn-success tombol" data-bs-toggle="modal" data-bs-target="#myModalhome" style="font-size:16px">Tambah</a></buton>
                </th>
            </thead>
            <tbody>
              <?php
              $no = 1;
              $data = mysqli_query($konektor, "SELECT * FROM kepala ORDER BY kepala .nama ASC");
              while ($m1 = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <th><?= $no++; ?></th>
                  <td><?php echo $m1['nama']; ?></td>
                  <td><?php echo $m1['tanggallahir']; ?></td>
                  <td><?php echo $m1['tempatlahir']; ?></td>
                  <td><?php echo $m1['telepon']; ?></td>
                  <td><?php echo $m1['email']; ?></td>
                  <td><?php echo $m1['pasword']; ?></td>
                  <td class=" text text-center">
                    <a href="#" class="btn btn-sm btn-info"><i class="material-icons" style="font-size:18px">&#xe254;</i></button>
                      <a onclick="return confirm('Yakin ingin mengahpus Data ini..?');" href="delete/deleteadmin.php?id=<?php echo $m1['idadmin']; ?>" class="btn btn-sm btn-danger"><i class="material-icons" style="font-size:18px">&#xe872;</i></button>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $("#myinputhome").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#mytabelhome tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
    </div>
    <!-- akhir halaman admin -->
    <!-- halaman dusun -->
    <div class="tab-pane container <?php if ($_GET['m'] == '2') {
                                      echo 'active';
                                    } ?>" id="menu1">
      <i><input class="form-control cari" id="myinputmenu1" type="text" placeholder="Cari data.."></i>
      <div class="table-responsive">
        <br>
        <table class="table table-striped table-hover table-sm" id="mytabelmenu1">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Dusun</th>
              <th>Kepala Dusun</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>pasword</th>
              <th class="text text-center">
                <a class="btn btn-mx btn-success tombol" data-bs-toggle="modal" data-bs-target="#myModalmenu1" style="font-size:16px">Tambah</a></buton>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($konektor, "SELECT * FROM dusun ORDER BY dusun .iddusun ASC");
            while ($m2 = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <th><?= $no++; ?></th>
                <td><?php echo $m2['namadusun']; ?></td>
                <td><?php echo $m2['namakepala']; ?></td>
                <td><?php echo $m2['telepon']; ?></td>
                <td><?php echo $m2['email']; ?></td>
                <td><?php echo $m2['pasword']; ?></td>
                <td class=" text text-center">
                  <a href="#" class="btn btn-sm btn-info"><i class="material-icons" style="font-size:18px">&#xe254;</i></button>
                    <a onclick="return confirm('Yakin ingin mengahpus Data ini..?');" href="delete/deletedusun.php?id=<?php echo $m2['iddusun']; ?>" class="btn btn-sm btn-danger"><i class="material-icons" style="font-size:18px">&#xe872;</i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <script>
        $(document).ready(function() {
          $("#myinputmenu1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#mytabelmenu1 tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
    </div>
    <!-- akhir halaman dusun -->
    <!-- halaman masyarakat -->
    <div class="tab-pane container <?php if ($_GET['m'] == '3') {
                                      echo 'active';
                                    } ?>" id="menu2">

      <i>
        <input class="form-control cari" id="myinputmenu2" type="text" placeholder="Cari data..">
      </i>
      <div class="table-responsive">
        <br>
        <table class="table table-striped table-hover table-sm" id="mytabelmenu2">
          <thead>
            <tr>
              <th>NO</th>
              <th>No.KK</th>
              <th>Nama KK</th>
              <th>Alamat</th>
              <th>Telepon</th>

              <th class="text text-center">
                <a class="btn btn-mx btn-success tombol " data-bs-toggle="modal" data-bs-target="#myModalmenu2" style="font-size:16px">Tambah</a></buton>
              </th>


            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($konektor, "SELECT * FROM perangkat ORDER BY perangkat .nama ASC");
            while ($m3 = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <th><?= $no++; ?></th>
                <td><?php echo $m3['idprngkt']; ?></td>
                <td><?php echo $m3['nama']; ?></td>
                <td><?php
                    echo "RT.$m3[tempatlahir] ";
                    echo "RW. $m3[tanggallahir] ";

                    ?></td>
                <td><?php echo $m3['telepon']; ?></td>
                <td class=" text text-center">
                  <a href="#" class="btn btn-sm btn-info"><i class="material-icons" style="font-size:18px">&#xe254;</i></button>
                    <a onclick="return confirm('Yakin ingin mengahpus Data ini..?');" href="delete/deleteKK.php?id=<?php echo $m3['idKK']; ?>" class="btn btn-sm btn-danger"><i class="material-icons" style="font-size:18px">&#xe872;</i></button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
      <script>
        $(document).ready(function() {
          $("#myinputmenu2").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#mytabelmenu2 tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
      </script>
    </div>

  </div>
  <!-- akhir halaman masyarakat -->

  <!-- The Modal menn home-->
  <div class="modal fade" id="myModalhome">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambahkan Data Admin</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="crate/insertadmin.php">

            <div class=" input-group mb-3">
              <span class="input-group-text">Nama</span>
              <input name="nama" required type="text" class="form-control">
            </div>
            <div class=" input-group mb-3">
              <span class="input-group-text">Tanggal lahir</span>
              <input name="tanggallahir" required type="date" class="form-control">
            </div>
            <div class=" input-group mb-3">
              <span class="input-group-text">Tempat lahir</span>
              <input name="tempatlahir" required type="text" class="form-control">
            </div>
            <div class=" input-group mb-3">
              <span class="input-group-text">Alamat</span>
              <input name="alamat" required type="text" class="form-control">
            </div>
            <div class=" input-group mb-3">
              <span class="input-group-text">telepon</span>
              <input name="telepon" required type="number" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">email</span>
              <input name="email" required type="email" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">password</span>
              <input name="pasword" required type="password" class="form-control">
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <i class="material-icons" style="font-size:24px">&#xe161;</i>
          <input type="submit" class="btn btn-primary " value="Simpan">
          </form>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


  <!-- ahir modal admiin -->



  <!-- modal dusun -->

  <!-- The Modal -->
  <div class="modal" id="myModalmenu1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="crate/insertperangkat.php">

            <div class=" input-group mb-3">
              <span class="input-group-text">Nama Dusun</span>
              <input name="namadusun" required type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama Kepala</span>
              <input name="namakepala" required type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">email</span>
              <input name="email" required type="email" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">telepon</span>
              <input name="telepon" required type="number" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">password</span>
              <input name="pasword" required type="password" class="form-control">
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <i class="material-icons" style="font-size:24px">&#xe161;</i>
          <input type="submit" class="btn btn-primary " value="Simpan">
          </form>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modalmenu 3 masyarakat -->
  <div class="modal" id="myModalmenu2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="crate/insertKK.php">

            <div class=" input-group mb-3">
              <span class="input-group-text">No.KK</span>
              <input name="NoKK" required type="number" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Nama KK</span>
              <input name="namaKK" required type="text" class="form-control">
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text">RT</span>
              <input name="RT" required type="number" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">RW</span>
              <input name="RW" required type="number" class="form-control">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Telepon</span>
              <input name="telepon" required type="number" class="form-control">
            </div>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <i class="material-icons" style="font-size:24px">&#xe161;</i>
          <input type="submit" class="btn btn-primary " value="Simpan">
          </form>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">tutup</button>
        </div>

      </div>
    </div>
  </div>
</body>

</html>