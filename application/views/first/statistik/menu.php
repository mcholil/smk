<!-- LEFT BLOCK -->
	
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li  class="<?php if($this->uri->segment(3) == 'wilayah' ) echo 'active';?>"> <?php echo anchor('statistik/folder/wilayah','Wilayah'); ?></li>
		<li  class="<?php if($this->uri->segment(3) == 'waktu' ) echo 'active';?>"> <?php echo anchor('statistik/folder/waktu','Waktu'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'kategori' ) echo 'active';?>"> <?php echo anchor('statistik/folder/kategori','Kategori'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'kontemporer' ) echo 'active';?>"> <?php echo anchor('statistik/folder/kontemporer','Kontemporer'); ?> </li>                      
	</ul>

<!--/ LEFT BLOCK -->      
