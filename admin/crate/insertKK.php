<?php
include '../fungsi/konektor.php';
include '../fungsi/filter.php';

$fariabel1 = filter($_POST['NoKK']);
$fariabel2 = filter($_POST['namaKK']);
$fariabel3 = filter($_POST['RT']);
$fariabel4 = filter($_POST['RW']);
$fariabel5 = filter($_POST['telepon']);


mysqli_query($konektor, "INSERT INTO KK VALUES ('','$fariabel1','$fariabel2','$fariabel3','$fariabel4','$fariabel5');");

header("location:../beranda.php?m=3");
