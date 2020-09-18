<?php
function getOngkir()
{
   global $koneksi;
   $ongkir= [];
   $sql = "SELECT * FROM ongkir";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $ongkir[] = $data;
   }

   return $ongkir;
}
function getOngkirById($idOngkir)
{
   global $koneksi;
   $query = "SELECT * FROM ongkir WHERE id_ongkir='$idOngkir'";
   $eks   = mysqli_query($koneksi, $query);
   $data = mysqli_fetch_assoc($eks);
   return $data;
}