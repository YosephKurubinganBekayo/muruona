<?php
include '../fungsi/konektor.php';
include '../fungsi/filter.php';
$fariabel = filter($_GET['id']);



mysqli_query($konektor, "DELETE FROM dusun WHERE iddusun=$fariabel");

header("location:../beranda.php?m=2");
