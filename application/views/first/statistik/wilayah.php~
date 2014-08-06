<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">
	

<?php if($statistik->num_rows()==0) //sementara biar ndak kelihatan
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


	<!-- morris stacked chart -->
	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<div class="muted pull-left">Graphic</div>
	</div>

	<div class="block-content collapse in">
	<div class="span12">
	<div id="hero-area" style="height: 250px;"></div>
	</div>
	</div>

	</div>
	<!-- /block -->
	</div>



	<div class="navbar">
	</div>

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Filter</button> <button class="btn">Cetak</button>
	




</div>

 

	<div class="block-content collapse in">
	<div class="span12">

	<table class="table table-striped">
	<thead>
	<tr>
	<th><?php echo anchor('statistik/folder','Kabupaten'); ?></th>
	<th><?php echo anchor('statistik/folder/kecamatan','Kecamatan'); ?></th>
	<th><?php echo anchor('statistik/folder/desa','Desa'); ?></th>
	<th><?php echo anchor('statistik/folder/pelapor','Laporan'); ?></th>
	</tr>
	</thead>

	<tbody>

<?php foreach ($statistik->result() as $data) : ?>
	<tr>
	<td><?php echo anchor("statistik/detail/kecamatan/$data->id",$data->nama); ?></td>
	<td><?php echo anchor("statistik/detail/kecamatan/$data->id",$this->statistik_model->get_count_kecamatan($data->id)); ?></td>
	<td><?php echo anchor("statistik/detail/desa/$data->id", $this->statistik_model->get_count_desa_kab($data->id)); ?></td>	
	<td><?php echo anchor('statistik/detail/laporan',$this->statistik_model->get_count_lap_kab($data->id)); ?></td>		
	</tr>
<?php endforeach ?>
	
	</tbody>
	</table>
	</div>
	</div>
	</div>
	<!-- /block -->
	</div>   



	</div>
	</div>
	</div>
<!--/.fluid-container-->
