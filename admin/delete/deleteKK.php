<?php
include '../fungsi/konektor.php';
include '../fungsi/filter.php';
$fariabel = filter($_GET['id']);



mysqli_query($konektor, "DELETE FROM KK WHERE idKK=$fariabel");

header("location:../beranda.php?m=3");
