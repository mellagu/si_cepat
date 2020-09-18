<?php
include '../../koneksi/conn.php';
include '../model/model_transaksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cetak laporan Transaksi Barang</title>
</head>

<body>
   <h2 class="mt-3">Laporan Data Transaksi Pengiriman Barang &nbsp;&nbsp;
   </h2>
   <table class="table table-striped" id="tabel-saya" border="1">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">No. Resi</th>
            <th scope="col">Pengirim</th>
            <th scope="col">Penerima</th>
            <th scope="col">Barang</th>
            <th scope="col">Biaya</th>
            <th scope="col">Status Barang</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1;
         foreach (getTransaksi() as $data) :  ?>
            <tr>
               <th scope="row"><?= $no++ ?></th>
               <td><?= $data['no_resi'] ?></td>
               <td><?= $data['nama_pengirim'] ?></td>
               <td><?= $data['nama_penerima'] ?></td>
               <td><?= $data['nama_barang'] ?></td>
               <td><?= $data['total_biaya'] ?></td>
               <td><?= $data['history'] ?></td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>

   <script>
      window.print();
   </script>
</body>

</html>