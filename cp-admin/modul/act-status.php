<?php
if (isset($_POST['btn-updateStatus'])) {
   $data = [
      "noResi"           => $_POST['noResi'],
      "namaBarang"       => $_POST['namaBarang'],
      "beratBarang"      => $_POST['beratBarang'],
      "jenisBarang"      => $_POST['jenisBarang'],
      "statusPengiriman" => $_POST['statusPengiriman'],
      "id_kurir"         => $_POST['idKurir'],
   ];

   $update = updateStatus($data) or die(mysqli_error($data));
   var_dump($data);

   if ($update) {
      notif("Data transaksi berhasil diubah status pengiriman", 1);
      header("Location: ?page=status");
   }
}

if (isset($_POST['btn-updateHistory'])) {
   $data = [
      "idtracking"        => $_POST['idTracking'],
      "history"           => $_POST['history'],
      "noResi"            => $_POST['noResi'],
   ];

   $update = updateHistory($data);

   if ($update) {
      notif("Data history pengiriman berhasil diubah", 1);
      header("Location: ?page=status&id=" . $data['noResi'] . "");
   }
}