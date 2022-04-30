<?php
include '../fungsi/konektor.php';
include '../fungsi/filter.php';
$fariabel1 = filter($_POST['nama']);
$fariabel2 = filter($_POST['tanggallahir']);
$fariabel3 = filter($_POST['tempatlahir']);
$fariabel4 = filter($_POST['alamat']);
$fariabel5 = filter($_POST['telepon']);
$fariabel6 = filter($_POST['email']);
$fariabel7 = filter($_POST['pasword']);


mysqli_query($konektor, "INSERT INTO kepala VALUES ('','$fariabel1','$fariabel2','$fariabel3','$fariabel4','$fariabel5','$fariabel6','$fariabel7');");

header("location:../beranda.php?m=1");
