<?php
getLayananById($_GET['id']);
?>
<h3 class="mt-3">Ubah Data Layanan</h3>
<form action="?page=act-layanan" method="POST">
<input type="text" hidden name="idLayanan" value="<?= $data['id_layanan'] ?>">
   <div class="row">
      <div class="col-md-4">
         <div class="form-group">
            <label for="layanan">Layanan</label>
            <input type="text" class="form-control" id="layanan" name="layanan" value="<?= $data['layanan'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $data['keterangan'] ?>">
         </div>
      </div>
   </div>
   <button type="submit" name="btn-editLayanan" class="btn btn-primary">Simpan</button>
</form>
