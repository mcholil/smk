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
<?php echo form_open('pengaturan/del/pengguna', array('class' => 'form-horizontal', 'name' => 'mainform1',));?>
	<div class="navbar navbar-inner block-header">
	<button class="btn">Ijinkan</button> 
	</div>
	
	<div class="block-content collapse in">
	<div class="span12">
	<table class="table table-striped">
	<thead>
	<tr>
	<th><input type="checkbox" name="allbox" value="check" onclick="checkAll('mainform1');" /></th>  
	<th>Nama</th>
	<th>Alamat</th>
	<th>No Handphone</th>
	<th>Jenis Kelamin</th>
	<th>Umur</th>
	<th>Profesi</th>
	<th>Desa Kec Kab</th>
	<th>Ijinkan</th>
	</tr>
	</thead>
	<tbody>
	


	<tr>
	<td><input type="checkbox" name="id_pengguna[]" value=""/> </td>
	<td>Sifa</td>
	<td>Alamat bla bla</td>
	<td>0894324333</td>
	<td>Perempuan</td>
	<td>40</td>	
	<td>Guru Swasta</td>		
	<td>Desa, Kec, Kabupaten</td>
	<td>level</td>
	</tr>

	<tr>
	<td><input type="checkbox" name="id_pengguna[]" value=""/> </td>
	<td>Maya</td>
	<td>Alamat bla bla</td>
	<td>0894324333</td>
	<td>Perempuan</td>
	<td>40</td>	
	<td>Guru Swasta</td>		
	<td>Desa, Kec, Kabupaten</td>
	<td>Ijinkan</td>
	</tr>
		             
	</tbody>
	</table>
	</div>
	</div> 
	</div>
<?php echo form_close();?>
	<div class="navbar">
	</div>

	<div class="block">
<?php echo form_open('pengaturan/del/pengguna', array('class' => 'form-horizontal', 'name' => 'mainform',));?>
	<div class="navbar navbar-inner block-header">
	<?php echo anchor('pengaturan/add/pengguna','Tambah','class="btn"'); ?> 
	<?php echo form_submit('','Hapus Terpilih','class="btn btn-primary"'); ?>
	<?php echo anchor('pengaturan/del/pengguna','Filter','class="btn"'); ?> 
	<?php echo anchor('pengaturan/del/pengguna','Pencarian Spesifik','class="btn"'); ?> 
	</div>
	<div class="block-content collapse in">
	<div class="span12">
	<table class="table table-striped">
	<thead>
	<tr>
	<th><input type="checkbox" name="allbox" value="check" onclick="checkAll('mainform');" /></th>  
	<th>Nama</th>
	<th>Alamat</th>
	<th>No Handphone</th>
	<th>JKelamin</th>
	<th>Umur</th>
	<th>Profesi</th>
	<th>Desa Kec Kab</th>
	<th>Lahir</th>
	</tr>
	</thead>
	

	<tbody>

<?php foreach ($pengaturan->result() as $data) : ?>
	<tr>
	<td><input type="checkbox" name="id_pengguna[]" value="<?php echo $data->id ?>"/> </td>
	<td><?php echo anchor("pengaturan/add/pengguna/edit/$data->id", $data->nama); ?></td>
	<td><?php echo $data->alamat?></td>
	<td><?php echo $data->no_hp?></td>
	<td><?php echo $data->jk?></td>
	<td><?php echo $data->umur?></td>
	<td><?php echo $data->profesi?></td>
	<td><?php echo $data->nama_desa?>, <?php echo $data->nama_kec?>, <?php echo $data->nama_kab?></td>
	<td><?php echo $data->tgl_lahir?></td>		
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
