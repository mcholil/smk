<html>
<head>
<title>Admin Login</title>
<link href="<?php echo $this->config->item('css_path');?>/rati/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo $this->config->item('css_path');?>/rati/bootstrap-responsive.css" rel="stylesheet" media="screen">
<link href="<?php echo $this->config->item('css_path');?>/rati/styles.css" rel="stylesheet" media="screen">
  </head>
  <body id="login">
<div class="container-fluid">

<div class="span12" id="content">

<div class="row-fluid">
<?php if($_SESSION['siteman']==-1): ?>
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Action Status</h4>
</div>

<div class="alert alert-info alert-block">
<a class="close" data-dismiss="alert" href="#">&times;</a>
<h4 class="alert-heading">Info!</h4>
Pengumuman Pengurus
</div>
</div>
<?php endif; ?>
<div class="container">
  
</div>
<?php echo form_open('siteman','class="form-signin"'); ?>  

<h2 class="form-signin-heading">Kirim Password</h2>
<input type="text"  name="username" id="username" class="input-block-level" placeholder="No Handphone">      
<button href="<?php echo site_url('siteman');?>" class="btn btn-primary" >Kembali</button> 
<button class="btn btn-primary" type="submit"  id="submit" value="Login" >Kirim Sandi</button>

<?php echo form_close();?>

</div> <!-- /container -->
</div>
<script src="vendors/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
