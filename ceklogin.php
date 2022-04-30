<!-- ceklogin halaman senddiri login dari banyak basis data -->
<?php
session_start();
include 'admin/fungsi/konektor.php';

include 'admin/fungsi/filter.php';


$username = filter($_POST['email']);
$sandi = filter($_POST['pass']);

$data = mysqli_query($konektor, "SELECT * from dusun where email = '$username' and pasword='$sandi'");
$cek = mysqli_num_rows($data);

if ($cek > 0) {
  $_SESSION['mm username'] = $username;
  $_SESSION['mm status'] = "login";
  header("location:pengunjung/beranda.php?");
  exit;
} else {
  $data = mysqli_query($konektor, "SELECT * from kepala where email = '$username' and pasword='$sandi'");
  $cek = mysqli_num_rows($data);

  if ($cek > 0) {
    $_SESSION['mm username'] = $username;
    $_SESSION['mm status'] = "login";
    header("location:admin/beranda.php?m=1");
    exit;
  }
  exit;
}
// } else {
  //   $data = mysqli_query($konektor, "SELECT * from admin where email = '$username' and pasword='$sandi'");
  //   $cek = mysqli_num_rows($data);

  //   if ($cek > 0) {
  //     $_SESSION['mm username'] = $username;
  //     $_SESSION['mm status'] = "login2";
  //     header("location:admin/beranda.php?pesan=berhasil");
  // setelah tambah data tambahkan 1 }(tutup kurung kurawal)
