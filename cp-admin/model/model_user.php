<?php
function getUser()
{
        global $koneksi;
        $d=[];
        $query= "SELECT * FROM user INNER JOIN profil ON user.id_user=profil.id_user";
        $eksekusi = mysqli_query($koneksi, $query); //Supaya query bisa membaca table user di database
        while ($data = mysqli_fetch_assoc($eksekusi)){ //untuk menampilkan data secara perulangan
            $d[] = $data;
        }
        return $d;
}
function getUserById($idUser){
    global $koneksi;
    $query = "SELECT * FROM user inner join profil on user.id_user=profil.id_user WHERE user.id_user = '$idUser'";
    $eks   = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($eks);
 
    return $data;

}

function addUser($username,$password,$nama_depan,$nama_belakang,$status,$level,$jk)
{
        global $koneksi;
        $sql = "INSERT INTO user(username,password,status,level, created_at) VALUES
        ('$username','$password','$status','$level',CURRENT_TIMESTAMP())";
        $insertUser = mysqli_query($koneksi,$sql);
        $idUser = mysqli_insert_id($koneksi); //mengambil ID User

        if($insertUser){
            $sql2 = "INSERT INTO profil(nama_depan,nama_belakang,jk,id_user) VALUES 
            ('$nama_depan','$nama_belakang','$jk','$idUser')";
            $insertProfil = mysqli_query($koneksi,$sql2) or die(mysqli_error($koneksi));
            if($insertProfil){
                return $insertProfil;
            }
        }

}

function editUser($idUser, $username, $password, $nama_depan, $nama_belakang, $status, $level, $jk)
{
   global $koneksi;

   if ($password == md5('')) {
      $sql = "UPDATE user SET username = '$username', status='$status',level = '$level' WHERE id_user = '$idUser'";
   } else {
      $sql = "UPDATE user SET username = '$username', password='$password',status= '$status',level = '$level' WHERE id_user = '$idUser'";
   }

   $updateUsers = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

   if ($updateUsers) {
      $sql2 = "UPDATE profil SET nama_depan ='$nama_depan', nama_belakang='$nama_belakang', jk='$jk' WHERE id_user='$idUser'";
      $updateProfil = mysqli_query($koneksi, $sql2);

      if ($updateProfil) {
         return $updateProfil;
      }
   }
}

function deleteUser($idUser){
    global $koneksi;
    $sql= "DELETE FROM user WHERE id_user = '$idUser'";
    $deleteUser = mysqli_query($koneksi,$sql);
    return $deleteUser;
}