<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMS Gateway</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?=base_url()?>assets/css/login.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?=base_url()?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div class="container">
         <div class="row">
           <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sistem Monitoring Hak-hak EKOSOB</h3>
						
						<?php if($_SESSION['siteman']==-1): ?>
				</br>
				<div class="alert alert-danger">
				  <p align="center">
					Username atau Password yang Anda Masukkan Salah
				  </p>
				</div>
			<?endif?>
						
                    </div>
                    <div class="panel-body">
                        <form action="<?=site_url('siteman/auth')?>" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nama" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Ingatkan password
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
								<button id="login-button" onclick="loginForm();return false" class="btn btn-success" type="submit">Login</button>
							
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="<?=base_url()?>assets/js/jquery-1.10.2.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
   
    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?=base_url()?>assets/js/sb-admin.js"></script>

</body>

</html>
