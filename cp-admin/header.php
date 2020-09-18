<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
   <a class="navbar-brand" href="#">Admin Panel</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
         <?php
            if($_SESSION['Level']== 'Admin') :?>
         <a class="nav-item nav-link active" href="?page=home">Home <span class="sr-only">(current)</span></a>
         <a class="nav-item nav-link active" href="?page=user">Management Users</a>
         <a class="nav-item nav-link active" href="?page=layanan">Layanan</a>
         <a class="nav-item nav-link active" href="?page=transaksi">Transaksi</a>
         <a class="nav-item nav-link active" href="?page=act-logout">Logout</a>
         
         <?php elseif ($_SESSION['Level']=='Kurir') :?>
         <a class="nav-item nav-link active" href="?page=home">Home <span class="sr-only">(current)</span></a>
         <a class="nav-item nav-link active" href="?page=status">Status</a>
         <a class="nav-item nav-link active" href="?page=act-logout">Logout</a>

         <?php elseif ($_SESSION['Level']=='Manajer') :?>
         <a class="nav-item nav-link active" href="?page=home">Home <span class="sr-only">(current)</span></a>
         <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'laporan' ? 'active' : '' : '' ?>" href="?page=laporan">Laporan</a>
         <a class="nav-item nav-link active" href="?page=act-logout">Logout</a>


         <?php endif ?>
      </div>
   </div>
</nav>