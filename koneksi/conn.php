<?php
date_default_timezone_set('Asia/Jakarta');
$server ='localhost';
$username = 'root';
$password = '';
$db = 'si_cepat';
$koneksi= mysqli_connect($server,$username,$password,$db);

if (!$koneksi){
    die (mysqli_error($koneksi));
}