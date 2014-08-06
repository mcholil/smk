<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">

<?php if($pengaturan->num_rows()==0) //sementara biar ndak kelihatan
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
<?php echo form_open('pengaturan/del/pengguna', array('class' => 'form-horizontal', 'name' => 'mainform',));?>
	<div class="navbar navbar-inner block-header">
	<?php echo anchor('pengaturan/add/kecamatan/add/'.$kab->row('id'),'Tambah','class="btn"'); ?>
	<?php echo form_submit('','Hapus Terpilih','class="btn btn-primary"'); ?>
	<?php echo anchor('pengaturan/add/kategori','Cetak','class="btn"'); ?>   
	</div>

	<div class="block-content collapse in">
	<div class="span12">

	<table class="table table-stripped">
	<thead>
	<tr>    
	<th><input type="checkbox" name="allbox" value="check" onclick="checkAll('mainform');" /></th>             
	<th>Kecamatan</th>
	<th>Desa</th>
	<th>Pelapor</th>
	</tr>
	</thead>
	<tbody>
<?php foreach ($pengaturan->result() as $data) : ?>
	<tr>
	<td><input type="checkbox" name="id_pengguna[]" value="<?php echo $data->id ?>"/> </td>
	<td><?php echo anchor("pengaturan/add/kecamatan/edit/$data->id",$data->nama); ?></td>
	<td><?php echo anchor("pengaturan/detail/desa/$data->id",$this->pengaturan_model->get_count_desa($data->id)); ?></td>
	<td><?php echo anchor('pengaturan/folder/pelapor',$this->pengaturan_model->get_count_user_kec($data->id)); ?></td>	
	</tr>
<?php endforeach ?>

	</tbody>
	</table>
	</div>

<?php echo $this->pagination->create_links();?>

	</div>
	</div>
	<!-- /block -->
<?php echo form_close();?>
	</div>
	</div>
	</div>
	</div>
<!--/.fluid-container-->
