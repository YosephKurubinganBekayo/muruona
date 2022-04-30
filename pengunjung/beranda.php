<?php
session_start();

if ($_SESSION['mm status'] != "login" and $_SESSION['mm usernameadmin'] != "$username") {
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Desa muruona</a>
      <a class="navbar-brand " style="font-size:18px" href="#">Dusun</a>
      <a href="../fungsi/logout.php" class="btn btn-mx btn-info"><i style="font-size:18px" class="fa">&#xf122;</i> Logut </button></a>
    </div>
  </nav>
  <br>

  <!-- Nav tabs -->
  <div class="container">
    <ul class="nav nav-tabs text text-right">

      <li class="nav-item">
        <a class="nav-link active " data-bs-toggle="tab" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-bs-toggle="tab" href="#menu1">Menu 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " data-bs-toggle="tab" href="#menu2">Menu 2</a>
      </li>
    </ul>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">

    <br>
    <div class="tab-pane container active" id="home">

      <i><input class="form-control" id="myinputhome" type="text" placeholder="Cari"></i>

      <div class="table-responsive">
        <br>
        <table class="table table-striped table-hover table-sm" id="mytabelhome">
          <thead>
            <tr>
              <th>NO</th>
              <th>Nama Dusun</th>
              <th>Nama Kepala</th>
              <th>Email</th>
              <th>telepon</th>
              <th class="text text-center">
                <a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#myModalhome"><i class="material-icons" style="font-size:22px">&#xe145;</i>Data Admin</a></buton>
              </th>


            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            $data = mysqli_query($konektor, "SELECT * from dusun");
            while ($m1 = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <th><?= $no++; ?></th>
                <td><?php echo $m1['namadusun']; ?></td>
                <td><?php echo $m1['namakepala']; ?></td>
                <td><?php echo $m1['email']; ?></td>
                <td><?php echo $m1['telepon']; ?></td>
                <td class="text text-center">
                  <a href="#" class="btn btn-sm btn-info"><i class="material-icons" style="font-size:18px">&#xe254;</i>Ubah</button>
                    <a href="#" class="btn btn-sm btn-danger"><i class="material-icons" style="font-size:18px">&#xe872;</i>Hapus</button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
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

    <div class="tab-pane container fade" id="menu1"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalmenu1">tambah data</a></div>
    <div class="tab-pane container fade" id="menu2"><a href="#" data-bs-toggle="modal" data-bs-target="#myModalmenu2">tambah data</a></div>
  </div>



  <!-- The Modal menn home-->
  <div class="modal" id="myModalhome">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Insert data Dusun</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" action="crate/insertdusun.php">

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
          Modal body..
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal -->
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
          Modal body..
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


</body>

</html>