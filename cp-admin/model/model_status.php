<?php
function getStatus()
{
   global $koneksi;
   $status = [];
   $sql = "SELECT * FROM transaksi inner join tracking_history on transaksi.no_resi=tracking_history.no_resi group by transaksi.no_resi";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $status[] = $data;
   }

   return $status;
}

function getStatusByResi($noResi)
{
   global $koneksi;
   $history = [];
   $sql = "SELECT * FROM tracking_history WHERE no_resi = '$noResi' order by datetime desc";
   $query  = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $history[] = $data;
   }

   return $history;
}

function updateStatus($data)
{
   global $koneksi;

   $query = "INSERT INTO tracking_history (no_resi, history, datetime, id_kurir) VALUES ('$data[noResi]', '$data[statusPengiriman]', CURRENT_TIMESTAMP(), '$data[id_kurir]')";
   $eks   = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
   return $eks;
}


function updateHistory($data)
{
   global $koneksi;

   $sql = "UPDATE tracking_history SET history = '$data[history]' WHERE id_tracking = '$data[idtracking]'";
   $updateHistory = mysqli_query($koneksi, $sql);

   return $updateHistory;
}