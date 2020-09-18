<?php

function ceklogin($user,$pass)
{
    global $koneksi; //Untuk memanggil variabel koneksinya

    $sql ="SELECT * FROM user WHERE username= '$user'";
    $query = mysqli_query($koneksi, $sql);
    $data = mysqli_fetch_assoc($query); //Untuk mengambil data dan menampilkan data

    $cekData = mysqli_num_rows($query); //Mengembalikan nilai kalo tdk ada data 1 
    if ($cekData>0){
        if ($data['password'] == $pass){
            if ($data['status']== 'Aktif') {
                //Session adalah penyimpanan sementara untuk login akun
                if ($data['level'] == 'Customer'){
                    //Bikin session users
                    $_SESSION['IdUser'] = $data['id_user'];
                    $_SESSION['User'] = $data['username'];
                    $_SESSION['Email'] = $data['email'];
                    $_SESSION['Level'] = $data['level'];
                    $_SESSION['Status'] = $data['status'];
                    header("Location: index.php");
                } else {
                    //Bikin session user Admin
                    $_SESSION['IdUser'] = $data['id_user'];
                    $_SESSION['User'] = $data['username'];
                    $_SESSION['Email'] = $data['email'];
                    $_SESSION['Level'] = $data['level'];
                    $_SESSION['Status'] = $data['status'];
                    header("Location: cp-admin/index.php");
                    
                }
            } else {
                notif("Akun anda tidak aktif", 2); //ditanyakan
                header("Location: ?page=login");
            }
        } else {
            notif("Password yang anda masukkan salah", 0); //ditanyakan
            header("Location: ?page=login");
        }
    } else {
        notif("Username tidak terdaftar", 0); //ditanyakan
            header("Location: ?page=login");
    }

}
?>