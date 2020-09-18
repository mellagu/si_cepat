<!-- Header -->
<section class ="header sticky-top">
        <div class="row"> <!-- satu header memiliki satu baris -->
          <div class="col">
              <nav class="navbar navbar-expand-lg navbar-dark" style="background:rgba(0,0,0,0.248);">
              <div class="container"> 
                <a class="navbar-brand" href="landingpage.html"><img src="./Assets/logo/logo syn cepat.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav ">
                <li class="nav-item active">
                <a class="nav-link" href="?page=landingpage">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=yes">YES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=reg">Reguler</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=ongkir">Ongkir</a>
                </li>
                <?php
                if(!empty($_SESSION['User'])) :?>
                  <a class="nav-link" href="#"><?= $_SESSION['User']?></a>
                  <a class="nav-link" href="?page=act-logout">Logout</a>
                <?php else :?>
                  <a class="nav-link" href="?page=login">Login</a>
                  <a class="nav-link" href="?page=register">Register</a>
                <?php endif ?>


            </ul>
          </div>
        </div>
      </div>
      </nav>
    </section>
      <!-- Akhir Header -->