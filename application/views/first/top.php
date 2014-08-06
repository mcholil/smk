<!--.nav-top-begin --> <!--TOP BLOCK -->
	<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
	<div class="container-fluid">
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
             	</a>
		<?php echo anchor('bantuan/registered','SMS Komunitas','class="brand"'); ?>
<!-- TOP Menu Start -->    
	<div class="nav-collapse collapse">
<!-- TOP Menu Right Start -->    
	<ul class="nav pull-right">

	<li class="dropdown">
	<a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 
	<i class="icon-user"></i> <?php echo $this->session->userdata('username');?>  <i class="caret"></i>
	</a>

	<ul class="dropdown-menu">
		<li> <?php echo anchor("pengaturan/profil/",'Profile','tabindex="-1"'); ?></li>
		<li class="divider"></li>
		<li> <?php echo anchor("pengaturan/dump_database/",'Dump Database','tabindex="-1"'); ?></li>
		<li> <?php echo anchor("pengaturan/setting/",'Setting','tabindex="-1"'); ?></li>
		<li class="divider"></li>
		<li> <?php echo anchor('siteman/logout','Logout','tabindex="-1"'); ?></li>
	</ul>
	</li>
	</ul>
<!--/ TOP Menu Right End -->  
  
<!-- TOP Menu Left Start -->    
	<ul class="nav">
		<li  class="<?php if($this->uri->segment(1) == 'sms' ) echo 'active';?>"> <?php echo anchor('sms/inbox/inbox','SMS'); ?></li>
		<li  class="<?php if($this->uri->segment(1) == 'proses' ) echo 'active';?>"> <?php echo anchor('proses/folder/proses','Dalam Proses'); ?> </li> 
		<li  class="<?php if($this->uri->segment(1) == 'statistik' ) echo 'active';?>"> <?php echo anchor('statistik','Statistik'); ?> </li>
		<li  class="<?php if($this->uri->segment(1) == 'pengaturan' ) echo 'active';?>"> <?php echo anchor('pengaturan','Pengaturan'); ?> </li>
		<li class="<?php if($this->uri->segment(1) == 'bantuan' ) echo 'active';?>"> <?php echo anchor('bantuan','Bantuan'); ?> </li>
	</ul>
<!--/ TOP Menu Left End -->  
	</div>
<!--/ TOP Menu End -->   
                   
	</div>
	</div>
	</div> 
<!--/.nav-collapse --> <!--/ TOP BLOCK -->
<!--.container-begin --> 

