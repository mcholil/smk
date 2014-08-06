<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">
	

<?php if($proses->num_rows()==0) //sementara biar ndak kelihatan
{?>
	<div class="row-fluid">
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
<?php } ?>

	<div class="navbar">
	</div>
	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Filter</button> 
	</div>

	<div class="block-content collapse in">
	<div class="span12">

	<table class="table table-striped">
	<thead>
	<tr>
	<th>Tanggal</th>
	<th>Judul</th>
	<th>Kategori</th>
	<th>Rangkuman</th>
	<th>Lokasi</th>
	</tr>
	</thead>

	<tbody>

<?php foreach($proses->result() as $tmp): ?>
	<tr>
	<td><?php echo $tmp->tgl_arsip?></td>
	<td><?php echo anchor("proses/edit/arsip/$tmp->id", $tmp->judul); ?></td>
	<td><?php echo $tmp->id_jenis?></td>
	<td><?php echo $tmp->rangkuman?></td>
	<td><?php echo $tmp->id_desa?></td>
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
