<!-- LEFT BLOCK -->
	
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class="<?php if($this->uri->segment(3) == 'proses' ) echo 'active';?>"> <?php echo anchor('proses/folder/proses','Proses'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'rilis' ) echo 'active';?>"> <?php echo anchor('proses/folder/rilis','Rilis'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'arsip' ) echo 'active';?>"> <?php echo anchor('proses/folder/arsip','Arsip'); ?> </li>
	</ul>

<!--/ LEFT BLOCK -->      
