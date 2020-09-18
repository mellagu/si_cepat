<?php
$data = getTransaksiById($_GET['id']);
$data2 = getOngkirById($_GET['id']);
?>
<h3 class="mt-3">Ubah Data Transaksi</h3>
<form action="?page=act-transaksi" method="POST">
   <!-- <input type="text" hidden name="idKurir" value="<?= $_SESSION['IdUser'] ?>" readonly> -->
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
            <label for="namaPengirim">Nama Pengirim</label>
            <input type="text" class="form-control" id="namaPengirim" name="namaPengirim" value="<?= $data['nama_pengirim'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">   
            <label for="kontakPengirim">Kontak Pengirim</label>
            <input type="text" class="form-control" id="kontakPengirim" name="kontakPengirim" value="<?= $data['kontak_pengirim'] ?>">
         </div>
      </div>
   </div>

   <div class="row">
   <div class="col">
         <div class="form-group">
            <label for="namaPenerima">Nama Penerima</label>
            <input type="text" class="form-control" id="namaPenerima" name="namaPenerima" value="<?= $data['nama_penerima'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">   
            <label for="kontakPenerima">Kontak Penerima</label>
            <input type="text" class="form-control" id="kontakPenerima" name="kontakPenerima" value="<?= $data['kontak_penerima'] ?>">
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="layanan">Layanan</label>
            <select name="layanan" class="form-control">
               <?php foreach (getLayanan() as $layanan) : ?>
                  <option value="<?= $layanan['id_layanan'] ?>"><?= $layanan['layanan'] ?></option>
               <?php endforeach ?>
            </select>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="ongkir">Ongkos Kirim</label>
            <select name="ongkir" class="form-control">
               <?php foreach (getOngkir() as $ongkir) : ?>
                  <option value="<?= $ongkir['id_ongkir'] ?>"><?= $ongkir['kota_asal'] ?> - <?= $ongkir['kota_tujuan'] ?> [<?= $ongkir['biaya'] ?>]</option>
               <?php endforeach ?>
            </select>
         </div>
      </div>
   </div>

   <button type="submit" class="btn btn-primary" name="btn-updateTransaksi" style="width: 40%;">Update Transaksi</button>
</form>