<!-- LEFT BLOCK -->
	
		<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class="<?php if($this->uri->segment(3) == 'inbox' or $this->uri->segment(2) == 'percakapan' ) echo 'active';?>"> <?php echo anchor('sms/inbox/inbox','SMS Masuk'); ?></li>
		<li class="<?php if($this->uri->segment(3) == 'outbox' ) echo 'active';?>"> <?php echo anchor('sms/outbox/outbox','SMS Keluar'); ?> </li>
		<li class="<?php if($this->uri->segment(2) == 'sentitems' ) echo 'active';?>"> <?php echo anchor('sms/sentitems','Terkirim'); ?> </li>
		<li class="<?php if($this->uri->segment(3) == 'tertunda' ) echo 'active';?>"> <?php echo anchor('sms/outbox/tertunda','Tertunda'); ?> </li>
		<li class="<?php if($this->uri->segment(3) == 'spam' ) echo 'active';?>"> <?php echo anchor('sms/inbox/spam','Spam'); ?> </li>
		<li class="<?php if($this->uri->segment(3) == 'sampah' ) echo 'active';?>"> <?php echo anchor('sms/inbox/sampah','Sampah'); ?> </li>
		<li class="<?php if($this->uri->segment(3) == 'komersial' ) echo 'active';?>"> <?php echo anchor('sms/inbox/komersial','Komersial'); ?> </li>
                </ul>

<!--/ LEFT BLOCK -->      
