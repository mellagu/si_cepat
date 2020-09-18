<!doctype html>
<html lang="en">
  <head>
    <title>Syn Cepat - Login</title>
  </head>
  <body>
  <?php
      if (!empty($_SESSION['User'])) {
         header("Location: index.php");
      }
      ?>
  <!-- Formulir YES-->
	<section class="formulir-yes">
		  <div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="container">
						<img src="./Assets/img/kurir2.jpg" alt="kurir" class="kurir">
					</div>
				</div>

				<div class="col-lg-7">
					<div class="row">
            <div class=yessh>
				<div class="container">
                <h1><b>Login</b>(Your Account)</h1>
                <h5>Doesn't have an account? <a href="?page=register">Register here</a></h5>
                <form action="?page=act-login" method="POST" style="margin-top:60px;">
                <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';//menampilkan notifikasi
                unset($_SESSION['notif']); //Agar session terhapus
                ?>
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" style="margin-bottom:30px;" id="formGroupExampleInput" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" style="margin-bottom:30px;"id="formGroupExampleInput2" placeholder="Enter Password">
                  </div>
                  <button type="submit" name="btn-login" class="btn btn-success">Login</button>
                </form>		      
              </div>
            </div>
					</div>
				</div>
			</div>
	  </div>
	</section>
<!--Akhir Formulir Login-->

</body>