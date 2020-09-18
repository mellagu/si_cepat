<?php
function getLayanan()
{
   global $koneksi;
   $layanan = [];
   $sql = "SELECT * FROM layanan";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $layanan[] = $data;
   }

   return $layanan;
}

function getLayananById($id_Layanan){
   global $koneksi;
   $query ="SELECT * FROM layanan WHERE id_layanan='$id_Layanan'";
   $eks   = mysqli_query($koneksi, $query);
   $data = mysqli_fetch_assoc($eks);
   return $data;
}

function addLayanan($layanan,$keterangan){
   global $koneksi;
   $sql = "INSERT INTO layanan(layanan,keterangan) VALUES ('$layanan','$keterangan')";
   $insertLayanan = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
   return $insertLayanan;

}

function editLayanan($idLayanan,$layanan,$keterangan){
   global $koneksi;
   $sql = "UPDATE layanan SET layanan ='$layanan', keterangan ='$keterangan' WHERE id_layanan='$idLayanan'";
   $updateLayanan = mysqli_query($koneksi,$sql);
   return $updateLayanan;
   
}

function deleteLayanan($idLayanan)
{
   global $koneksi;
   $sql = "DELETE FROM layanan WHERE id_layanan = '$idLayanan'";
   $deleteLayanan = mysqli_query($koneksi, $sql);
   return $deleteLayanan;
}