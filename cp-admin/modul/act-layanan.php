<?php
if (isset($_POST['btn-addLayanan'])){
    $layanan = $_POST['layanan'];
    $keterangan = $_POST['keterangan'];

    $insert = addLayanan($layanan, $keterangan);
    if ($insert){
        notif("Data layanan berhasil ditambah",1);
        header("Location: ?page=layanan");
    }
}

if(isset($_POST['btn-editLayanan'])){
    $idLayanan = $_POST['idLayanan'];
    $layanan = $_POST['layanan'];
    $keterangan = $_POST['keterangan'];

    $update = editLayanan($idLayanan,$layanan,$keterangan);
    if ($update){
        notif("Data layanan berhasil diubah",1);
        header("Location: ?page=layanan");
    }
}
if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] = 'delete') {
       $idlayanan = $_GET['id'];
 
       $deleteLayanan = deleteLayanan($idlayanan);
       if ($deleteLayanan) {
          notif("Data Layanan berhasil dihapus", 1);
          header("Location: ?page=layanan");
       }
    }
 }