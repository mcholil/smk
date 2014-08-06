<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">
	<div class="row-fluid">

<?php if($sms->num_rows()==0) //sementara biar ndak kelihatan
{?>	
	<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h4>Action Status</h4>
	</div>

	<div class="alert alert-info alert-block">
	<a class="close" data-dismiss="alert" href="#">&times;</a>
	<h4 class="alert-heading">Info!</h4>
	Pengumuman Pengurus
	</div>
<?php } ?>
	<div class="navbar">
	<?php echo anchor('sms/kirim/single','Kirim SMS','class="btn"'); ?> 
	<button class="btn btn-mid">Cari</button> 
	</div>
	</div>

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Batalkan</button> 
	<button class="btn">Filter</button> 
	</div>

	<div class="block-content collapse in">
	<div class="span12">
	<table class="table table-striped">

	<thead>
	<tr>
	<th><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></th>
	<th>Tanggal</th>
	<th>Pengirim</th>
	<th>Isi</th>
	</tr>
	</thead>

	<tbody>
<?php foreach($sms->result() as $tmp): ?>
	<tr>
	<td><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></td>
	<td><?php echo $tmp->ReceivingDateTime?></td>
	<td><?php echo $tmp->SenderNumber?></td>
	<td><?php echo $tmp->TextDecoded?></td>
	</tr>
<?php endforeach;  ?>
	
	</tbody>
	</table>
	</div>

<?php echo $this->pagination->create_links();?>

	</div>
	</div>
	<!-- /block -->
	</div>
	</div>
	</div>
	</div>
<!--/.fluid-container-->
