<?php

$konektor = mysqli_connect('localhost', 'root', '', 'dbmuruona');

if (mysqli_connect_errno()) {
  echo "koneksi gagal :"  . mysqli_connect_error();
}
