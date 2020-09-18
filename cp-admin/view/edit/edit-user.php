<?php
$data = getUserById($_GET['id']);
?>

<h3 class="mt-3">Ubah Data Users</h3>
<form action="?page=act-user" method="POST">
   <input type="text" name="idUser" value="<?= $data['id_user'] ?>" hidden>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="Username">Username</label>
            <input type="text" class="form-control" id="Username" aria-describedby="emailHelp" name="username" max="10" value="<?= $data['username'] ?>">
            <small id="emailHelp" class="form-text text-muted">username Maksimum 10 karakter</small>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
            <small id="passwordHelp" class="form-text text-danger">Kosongkan jika tidak ingin mengubah password</small>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="nama_depan">Nama Depan</label>
            <input type="text" class="form-control" id="namaDepan" name="nama_depan" value="<?= $data['nama_depan'] ?>">
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label for="nama_belakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="nama_belakang" value="<?= $data['nama_belakang'] ?>">
         </div>
      </div>
   </div>
   <div class="col">
         <div class="form-group mt-4">
            <input type="checkbox" id="status" name="status" <?= $data['status'] == 'Aktif' ? 'checked' : '' ?>> <label for="status">Aktif</label>
         </div>
      </div>
   <div class="row">
      <div class="col">
         <div class="form-group">
            <label for="level">Level</label>
            <select name="level" class="form-control">
               <option value="Admin" <?= $data['level'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
               <option value="Kurir" <?= $data['level'] == 'Kurir' ? 'selected' : '' ?>>Kurir</option>
               <option value="Customer" <?= $data['level'] == 'Customer' ? 'selected' : '' ?>>Customer</option>
               <option value="Manager" <?= $data['level'] == 'Manager' ? 'selected' : '' ?>>Manager</option>
            </select>
         </div>
      </div>
      <div class="col">
         <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <input type="radio" id="pria" name="jk" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : '' ?>> <label for="pria">Pria</label> &nbsp;&nbsp;
            <input type="radio" id="wanita" name="jk" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : '' ?>> <label for="wanita">Wanita</label>
         </div>
      </div>
   </div>

   <button type="submit" class="btn btn-primary" name="btn-editUser" style="width: 40%;">Simpan Perubahan</button>
</form>