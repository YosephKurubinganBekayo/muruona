<?php
session_start();

$_SESSION['mm status'] = '';
$_SESSION['mm username'] = '';

unset($_SESSION['mm status']);
unset($_SESSION['mm username']);


session_unset();
session_destroy();
header("location:../index.php");
