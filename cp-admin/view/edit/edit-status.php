<?php
$data = getTransaksiById($_GET['id']);
?>
<h3 class="mt-3">Ubah Status Pengiriman</h3>
<form action="?page=act-status" method="POST">
   <input type="text" hidden name="idKurir" value="<?= $_SESSION['IdUser'] ?>" readonly>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="noResi">No. Resi</label>
            <input type="text" class="form-control" id="noResi" name="noResi" value="<?= $data['no_resi'] ?>" readonly>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="namaBarang">Nama barang</label>
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" value="<?= $data['nama_barang'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="jenisBarang">Jenis Barang</label>
            <input type="text" class="form-control" id="jenisBarang" name="jenisBarang" value="<?= $data['jenis_barang'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="beratBarang">Berat Barang</label>
            <input type="text" class="form-control" id="beratBarang" name="beratBarang" value="<?= $data['berat_barang'] ?>">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="statusPengiriman">Status Pengiriman</label>
            <textarea class="form-control" id="statusPengiriman" name="statusPengiriman"></textarea>
         </div>
      </div>
   </div>

   <button type="submit" class="btn btn-primary" name="btn-updateStatus" style="width: 40%;">Update Status</button>
</form>