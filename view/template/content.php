<?php
$halaman = isset($_GET['page']) ? $_GET['page'] :'';

switch ($halaman){
    case '':
        include 'view/landingpage.php';
    break;
    case 'landingpage':
        include 'view/landingpage.php';
    break;
    case 'ongkir':
        include 'view/ongkir.php';
    break;
    case 'reg':
        include 'view/reg.php';
    break;
    case 'yes':
        include 'view/yes.php';
    break;
    case 'review':
        include 'view/review.php';
    break;
    case 'login':
        include 'view/login.php';
    break;
    case 'register':
        include 'view/register.php';
    break;
    //Action-FORM
    case 'act-login':
        include 'modul/act-login.php';
    break;
    case 'act-register':
        include 'modul/act-register.php';
    break;
    case 'act-logout':
        include 'modul/act-logout.php';
    break;

    
    default :
        echo "HALAMAN TIDAK DITEMUKAN 404";
    break;

    
    
}