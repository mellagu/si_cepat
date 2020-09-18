<?php
if (isset($_POST['btn-addUser'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $status = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';
    $level = $_POST['level'];
    $jk = $_POST['jk'];
    
    $insert = addUser($username,$password,$nama_depan,$nama_belakang,$status,$level,$jk);
    if($insert){
        notif("Data user berhasil ditambah",1);
        header("Location: ?page=user");
    }
}
if (isset($_POST['btn-editUser'])) {
    $idUser      = $_POST['idUser'];
    $username    = $_POST['username'];
    $password    = md5($_POST['password']);
    $nama_depan   = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $status      = isset($_POST['status']) ? 'Aktif' : 'Tidak Aktif';
    $level       = $_POST['level'];
    $jk          = $_POST['jk'];
 
    $update = editUser($idUser, $username, $password, $nama_depan, $nama_belakang,$status, $level , $jk);
 
    if ($update) {
       notif("Data Users berhasil diubah", 1);
       header("Location: ?page=user");
    }
 }
if (isset($_GET['aksi'])){
    if($_GET['aksi']=='delete'){
        $iduser = $_GET['id'];

        $deleteUser = deleteUser($iduser);
        if($deleteUser){
            notif("Data User Berhasil Dihapus",1);
            header("Location: ?page=user");
        }
    }
}