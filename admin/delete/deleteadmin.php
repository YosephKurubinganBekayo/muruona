<?php
include '../fungsi/konektor.php';
include '../fungsi/filter.php';
$fariabel = filter($_GET['id']);



mysqli_query($konektor, "DELETE FROM kepala WHERE idadmin=$fariabel");

header("location:../beranda.php?m=1");
