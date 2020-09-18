<h3 class="mt-3">Tambah User</h3>
<form action="?page=act-user" method="POST"> 

  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="exampleInputUsername">Username</label> 
        <input type="text" class="form-control" id="exampleInputEmail1" name="username"><!--How to warn them ?-->
        <small id="emailHelp" class="form-text text-muted">Username maksimum 10 karakter</small>
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="exampleInputNamaDepan">Nama Depan</label> 
        <input type="text" class="form-control" id="exampleInputNamaDepan" name="nama_depan">
      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="exampleInputNamaBelakang">Nama Belakang</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nama_belakang">
      </div>
    </div>
  </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="status" name="status">
      <label for="status">Aktif</label>
    </div>
    
    <div class="row">
      <div class="col">
        <div class="form-group mt-1" style="width: 20%;">
          <label for="level">Level</label>
            <select name="level" class="form-control">
              <option value="Admin">Admin</option>
              <option value="Kurir">Kurir</option>
              <option value="Manajer">Manajer</option>
              <option value="Customer">Customer</option>
            </select>
        </div>
      </div>
    </div>
    <div class="col">
         <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <input type="radio" id="pria" name="jk" value="Pria" checked> <label for="pria">Pria</label> &nbsp;&nbsp;
            <input type="radio" id="wanita" name="jk" value="Wanita"> <label for="wanita">Wanita</label>
         </div>
      </div>
    <button type="submit" class="btn btn-primary" name="btn-addUser" style="width: 40%;">Simpan</button>
</form>