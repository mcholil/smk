<!-- LEFT BLOCK -->
	
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li  class="<?php if($this->uri->segment(3) == 'kategori' ) echo 'active';?>"> <?php echo anchor('pengaturan/folder/kategori','Kategori'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'wilayah' or $this->uri->segment(3) == 'kecamatan' or  $this->uri->segment(3) == 'desa') echo 'active';?>"> <?php echo anchor('pengaturan/folder/wilayah','Wilayah'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'grup' ) echo 'active';?>"> <?php echo anchor('pengaturan/folder/grup','Grup'); ?> </li>
		<li  class="<?php if($this->uri->segment(3) == 'pengguna' ) echo 'active';?>"> <?php echo anchor('pengaturan/folder/pengguna','Pengguna'); ?> </li>                   
	</ul>
<!--/ LEFT BLOCK -->      
