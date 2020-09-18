<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

if ($_SESSION['Level'] == 'Admin'){
   switch ($halaman) {
      case '':
      include 'view/home.php';
         break;
      case 'home':
         include 'view/home.php';
         break;

      case 'user':
         include 'view/user.php';
         break;
      case 'add-user' :
         include 'view/add/add-user.php';
         break;
      case 'edit-user' :
         include 'view/edit/edit-user.php';
      break;

      case 'layanan';
         include 'view/layanan.php';
      break;
      case 'add-layanan' :
         include 'add/add-layanan.php';
      break;
      case 'edit-layanan' :
         include 'view/edit/edit-layanan.php';
      break;
      
      case 'transaksi';
         include 'view/transaksi.php';
      break;
      case 'add-transaksi';
         include 'view/add/add-transaksi.php';
      break;
      case 'edit-transaksi':
         include 'view/edit/edit-transaksi.php';
      break;

      case 'act-logout':
         include 'modul/act-logout.php';
         break;
      case 'act-user' :
         include 'modul/act-user.php';
         break;
      case 'act-layanan':
         include 'modul/act-layanan.php';
         break;
      case 'act-transaksi':
         include 'modul/act-transaksi.php';
         break;

      case 'act-logout':
         include 'modul/act-logout.php';
         break;
      default:
         include '404.php';
         break;
}
} else if($_SESSION['Level'] == 'Kurir'){
   switch ($halaman) {
      case '':
      include 'view/home.php';
         break;
      case 'home':
         include 'view/home.php';
         break;
      case 'status' :
         include 'view/status.php';
         break;

      case 'edit-status':
         include 'view/edit/edit-status.php';
         break;
      case 'act-status':
         include 'modul/act-status.php';
         break;
      
      case 'act-logout':
         include 'modul/act-logout.php';
         break;
   default:
      include '404.php';
      break;

}
} else if($_SESSION['Level'] == 'Manajer'){
   switch ($halaman) {
      case '':
      include 'view/home.php';
         break;
      case 'home':
         include 'view/home.php';
         break;
      case 'laporan':
         include 'view/laporan.php';
         break;
      case 'act-logout':
         include 'modul/act-logout.php';
         break;
   default:
      include '404.php';
      break; 
}
}
