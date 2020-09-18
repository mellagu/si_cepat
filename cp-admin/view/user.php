<h2 class="mt-4">Data Users</h2>
  <a href="?page=add-user" class="btn btn-info">Tambah Data</a>
  <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
unset($_SESSION['notif']); 
?>
  <table class="table table-striped"id="tabel-saya">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Jenis kelamin</th>
      <th scope="col">Status</th>
      <th scope="col">Level</th>
      <th scope="col">Log Login</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; ?>
      <?php foreach (getUser() as $data):?>

        <tr> 
              <th scope="row"><?= $no++ ?></th>
              <td><?= $data['username'] ?></td> 
              <td><?= $data['nama_depan'] .' '. $data['nama_belakang'] ?></td>
              <td><?= $data['jk'] ?></td>
              <td><?= $data['status'] ?></td>
              <td><?= $data['level'] ?></td>
              <td><?= $data['created_at'] ?></td>
              <td>
                  <a href="?page=edit-user&id=<?= $data['id_user'] ?>" class="btn btn-info btn-sm">Ubah</a>
                  <a href="?page=act-user&aksi=delete&id=<?= $data ['id_user']?>" onclick="return confirm('Yakin data ingin dihapus?')"  class="btn btn-danger btn-sm">Hapus</a>
              </td>
            </tr>
            
        <?php endforeach
      ?>
  </tbody>
</table>