<h3>Daftar Transaksi Pengiriman Barang</h3>
<a href="?page=add-transaksi" class="btn btn-info">Tambah Data</a>
  <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
unset($_SESSION['notif']); 
?>
  <table class="table table-striped" id="tabel-saya">
  <thead>
    <tr>
      <th scope="col">#</th> 
      <th scope="col">No. Resi</th>
      <th scope="col">Pengirim</th>
      <th scope="col">Penerima</th>
      <th scope="col">Barang</th>
      <th scope="col">Biaya</th>
      <th scope="col">Status Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
      <?php foreach (getTransaksi() as $data):?>

        <tr> 
              <th scope="row"><?= $no++ ?></th>
              <td><?= $data['no_resi'] ?></td> 
              <td><?= $data['nama_pengirim'] ?></td>
              <td><?= $data['nama_penerima'] ?></td>
              <td><?= $data['nama_barang'] ?></td>
              <td><?= $data['total_biaya'] ?></td>
              <td><?= $data['history'] ?></td>
              <td>
              <a href="?page=edit-transaksi&id=<?= $data['no_resi'] ?>" class="btn btn-info btn-sm">Ubah</a>
                  <a href="?page=act-transaksi&aksi=delete&id=<?= $data['no_resi'] ?>" onclick="return confirm('Yakin data ingin dihapus?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
              </td>
            </tr>
            
        <?php endforeach
      ?>
  </tbody>
</table>