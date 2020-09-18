<!doctype html>
<html lang="en">
  <head>
    <title>Syn Cepat - Register</title>
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
        <form action="?page=act-register" method="POST" style="margin-top:60px;">
                  <div class="form-group">
                  <?= isset($_SESSION['notif']) ? $_SESSION['notif'] : '';
                      unset($_SESSION['notif']);?>
                <h1><b>Register</b>Your Account</h1>
                <h5>Do you have an account ? <a href="?page=login">Login here</a></h5>
                    <input type="text" class="form-control" name="firstName" style="margin-bottom:30px;" id="formGroupExampleInput" placeholder="Enter your first name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="lastName" style="margin-bottom:30px;" id="formGroupExampleInput" placeholder="Enter your last name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" style="margin-bottom:30px;" id="formGroupExampleInput" placeholder="Enter Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" style="margin-bottom:30px;"id="formGroupExampleInput2" placeholder="Enter Password">
                  </div>
                  <p>
                    <input type="radio" name="jk" value="Pria" id="pria"><label for="pria">Pria</label> &nbsp;
                    <input type="radio" name="jk" value="Wanita" id="wanita"><label for="pria">Wanita</label> &nbsp;
                    
                  </p>
                  <button type="submit" name="btn-register" class="btn btn-success">Register</button>
                </form>		      
              </div>
            </div>
					</div>
				</div>
			</div>
	  </div>
	</section>
<!--Akhir Formulir Logout-->

</body>