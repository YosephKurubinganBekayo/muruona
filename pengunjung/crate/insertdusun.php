<?php
include 'konektor.php';
include 'filter.php';
$fariabel1 = filter($_POST['namadusun']);
$fariabel2 = filter($_POST['namakepala']);
$fariabel3 = filter($_POST['email']);
$fariabel4 = filter($_POST['telepon']);
$fariabel5 = filter($_POST['pasword']);


mysqli_query($konektor, "INSERT INTO dusun VALUES ('','$fariabel1','$fariabel2','$fariabel3','$fariabel4','$fariabel5');");

header("location:../beranda.php?m=1");
