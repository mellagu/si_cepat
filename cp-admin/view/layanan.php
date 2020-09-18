<h2 class="mt-3">Data Layanan &nbsp;&nbsp;
   <a href="?page=add-layanan" class="btn btn-info" data-toggle="modal" data-target="#layananModal">Tambah Layanan</a>
</h2>
<?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
unset($_SESSION['notif']); //untuk notifikasi kalo layanan telah ditambah/dihapus
?>
<table class="table table-striped">
   <thead>
      <tr>
         <th scope="col">#</th>
         <th scope="col">Layanan</th>
         <th scope="col">Keterangan</th>
         <th scope="col">Aksi</th>
      </tr>
   </thead>
   <tbody>
      <?php $no = 1;
      foreach (getLayanan() as $data) : ?>
         <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $data['layanan'] ?></td>
            <td><?= $data['keterangan'] ?></td>
            <td>
               <a href="?page=edit-layanan&id=<?= $data['id_layanan'] ?>" class="btn btn-info btn-sm">Ubah</a>
               <a href="?page=act-layanan&aksi=delete&id=<?= $data['id_layanan'] ?>" onclick="return confirm('Yakin data ingin dihapus?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
         </tr>
      <?php endforeach ?>
   </tbody>
</table>

<?php
include 'view/add/add-layanan.php';
?>