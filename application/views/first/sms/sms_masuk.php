<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content" >
	<!--row fluid start-->
	

<?php if($sms->num_rows()==0) //sementara biar ndak kelihatan
{?>
<div class="row-fluid">
	<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Action Status</h4>
	</div>

	<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4 class="alert-heading">Info!</h4>
	<a href="#">Pengumuman Pengurus</a>
	</div>
	</div>
<?php } ?>	

	<div class="navbar">
	<?php echo anchor('sms/kirim/single','Kirim SMS','class="btn"'); ?> 
	<button class="btn btn-mid">Cari</button> 
        </div>
        
	
	<!--row fluid End-->

	<!--row fluid Start-->
	<div class="row-fluid">
	<!-- block header-->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Spam</button> 
	<button class="btn">Filter</button> 
	</div>

	<div class="block-content collapse in">
	<div class="span12">

	<table class="table table-striped">

	<thead>
	<tr>
	<th><input type="checkbox" name="allbox" value="check" onclick="checkAll('mainform');" /></th>
	<th>Tanggal</th>
	<th>Pengirim</th>
	<th>Isi</th>
	</tr>
	</thead>

<!-- formatting output untuk menampilkan multi part  -->
	<tbody>
<?php foreach($sms->result() as $tmp): ?>

	<tr>
	<td><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></td>
	<td><?php echo $tmp->ReceivingDateTime?></td>
	<!-- terdaftar (menampilkan nama -> detail) . belum terdaftar (menampilkan no -> tambah baru)   -->
	<td><?php echo anchor("pengaturan/add/pengguna", $tmp->SenderNumber); ?></td>
	<td><?php echo anchor("sms/percakapan/$tmp->ID", $tmp->TextDecoded); ?></td>
	</tr>

<?php  endforeach;  ?>

	</tbody>
	</table>
        </div>

<?php echo $this->pagination->create_links();?>

        </div>
        </div>
	<!-- /block -->

	</div>	
        </div>
<!--/.fluid-container-->
        
