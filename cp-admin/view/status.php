<?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
unset($_SESSION['notif']);
?>

<?php
if (!isset($_GET['id'])) : ?>
   <h2 class="mt-3">Data Transaksi Pengiriman Barang &nbsp;&nbsp;
   </h2>
   <table class="table table-striped" id="tabel-saya">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">No. Resi</th>
            <th scope="col">Pengirim</th>
            <th scope="col">Penerima</th>
            <th scope="col">Barang</th>
            <th scope="col">Biaya</th>
            <!-- <th scope="col">Status Barang</th> -->
            <th scope="col">Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1;
         foreach (getStatus() as $data) :  ?>
            <tr>
               <th scope="row"><?= $no++ ?></th>
               <td><a href="?page=status&id=<?= $data['no_resi'] ?>"><?= $data['no_resi'] ?></a></td>
               <td><?= $data['nama_pengirim'] ?></td>
               <td><?= $data['nama_penerima'] ?></td>
               <td><?= $data['nama_barang'] ?></td>
               <td><?= $data['total_biaya'] ?></td>
               <!-- <td><?= $data['history'] ?></td> -->
               <td>
                  <a href="?page=edit-status&id=<?= $data['no_resi'] ?>" class="btn btn-info btn-sm">Ubah Status Pengiriman </a>
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
<?php else : ?>
   <h4>No Resi : <?= getStatusByResi($_GET['id'])[0]['no_resi'] ?></h4>
   <table class="table table-striped" id="tabel-saya">
      <thead>
         <tr>
            <th scope="col">#</th>
            <th scope="col">History</th>
            <th scope="col">Time Update</th>
            <th scope="col">Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1;
         foreach (getStatusByResi($_GET['id']) as $history) : ?>
            <tr>
               <th scope="row"><?= $no++ ?></th>
               <td>
                  <?php
                  if (isset($_GET['act'])) {
                     if ($_GET['act'] == 'ubah' && $_GET['idtracking'] == $history['id_tracking']) { ?>
                        <form action="?page=act-status" method="POST">
                           <input type="text" name="idTracking" value="<?= $history['id_tracking'] ?>" hidden>
                           <input type="text" name="noResi" value="<?= $history['no_resi'] ?>" hidden>
                           <input type="text" name="history" placeholder="Ubah status pengiriman" value="<?= $history['history'] ?>" size="50">
                           <button type="submit" name="btn-updateHistory" class="btn btn-outline-info btn-sm">Simpan</button>
                        </form>
                  <?php
                     } else {
                        echo $history['history'];
                     }
                  } else {
                     echo $history['history'];
                  }
                  ?>
               </td>
               <td><?= $history['datetime'] ?></td>
               <td>
                  <a href="?page=status&id=<?= $history['no_resi'] ?>&act=ubah&idtracking=<?= $history['id_tracking'] ?>" class="btn btn-info btn-sm">ubah </a>
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
<?php endif; ?>