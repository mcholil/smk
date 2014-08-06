<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">


	<div class="navbar">
	</div>	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<h4>Pengguna</h4>
	</div>

	

	<div class="block-content collapse in">
	<div class="span12">



<!-- BEGIN FORM-->
	<?php echo form_open('pengaturan/update/pengguna', array('class' => 'form-horizontal'));?>
	<fieldset>
	<div class="alert alert-error hide">
	<button class="close" data-dismiss="alert"></button>
	You have some form errors. Please check below.
	</div>
	<div class="alert alert-success hide">
	<button class="close" data-dismiss="alert"></button>
	Your form validation is successful!
	</div>
	<input type="hidden" name="id" id="id" value="<?php if(isset($pengaturan)) echo $pengaturan->row('id');?>" />		
	<div class="control-group">
	<label class="control-label">Nama<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="nama" data-required="1" value="<?php if(isset($pengaturan)) echo $pengaturan->row('nama');?>" class="span6 m-wrap"/>
	</div>
	</div>
			
	<div class="control-group">
	<label class="control-label">Alamat<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="alamat" value="<?php if(isset($pengaturan)) echo $pengaturan->row('alamat');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>


	<div class="control-group">
	<label class="control-label">Profesi<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="profesi" value="<?php if(isset($pengaturan)) echo $pengaturan->row('profesi');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>

			
	<div class="control-group">
	<label class="control-label">No Handphone<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="no_hp" value="<?php if(isset($pengaturan)) echo $pengaturan->row('no_hp');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>


	<div class="control-group">
  	<label class="control-label">Jenis <span class="required">*</span></label>
  	<div class="controls">
  	<select class="span6 m-wrap" name="category">
  	<option value="">Select...</option>
  	<option value="<?php if(isset($pengaturan)) echo $pengaturan->row('jk');?>">Perempuan</option>
  	<option value="Category 2">Laki-Laki</option>		
  	</select>
  	</div>
  	</div>


	<div class="control-group">
        <label class="control-label" for="date01">Tanggal Lahir</label>
        <div class="controls">
        <input type="text" class="input-xlarge datepicker" id="date01" value="<?php if(isset($pengaturan)) echo $pengaturan->row('tgl_lahir');?>">
        </div>
        </div>

	<div class="control-group">
  	<label class="control-label">Kabupaten <span class="required">*</span></label>
  	<div class="controls">
  	<select class="span6 m-wrap" name="category">
  	<option value="">Select...</option>
  		
	<?php if(!empty($kabupaten)){ foreach($kabupaten->result() as $kab) { echo "<option value='". $kab->id."'>".$kab->nama."</option>"; }}?>	
  	</select>
  	</div>
  	</div>

	
	<div class="control-group">
  	<label class="control-label">Kecamatan <span class="required">*</span></label>
  	<div class="controls">
  	<select class="span6 m-wrap" name="category">
  	<option value="">Select...</option>
  		
	<?php if(!empty($kecamatan)){ foreach($kecamatan->result() as $kec) { echo "<option value='". $kec->id."'>".$kec->nama."</option>"; }}?>	
  	</select>
  	</div>
  	</div>

	<div class="control-group">
  	<label class="control-label">Desa <span class="required">*</span></label>
  	<div class="controls">
  	<select class="span6 m-wrap" name="category">
  	<option value="">Select...</option>
  		
	<?php if(!empty($desa)){ foreach($desa->result() as $des) { echo "<option value='". $des->id."'>".$des->nama."</option>"; }}?>	
  	</select>
  	</div>
  	</div>



	<div class="control-group">
	<label class="control-label">Ganti Kata Sandi: </label>		
	</div>

	<div class="control-group">
	<label class="control-label">Nama Pengguna<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="username" value="<?php if(isset($pengaturan)) echo $pengaturan->row('username');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label">Kata Sandi Lama<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="name" value="<?php if(isset($pengaturan)) echo $pengaturan->row('password');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>

	<div class="control-group">
	<label class="control-label">Kata Sandi Baru<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="password" data-required="1" value="<?php if(isset($pengaturan)) echo $pengaturan->row('password');?>" class="span6 m-wrap"/>
	</div>
	</div>

		
	<div class="form-actions">
	<?php echo form_submit('','Simpan','class="btn btn-primary"'); ?>
	<?php echo anchor('pengaturan/add/kategori','Batal','class="btn btn-primary"'); ?>
	</div>				
			
	</fieldset>
<?php echo form_close();?>
	<!-- END FORM-->



        </div>
	</div>
	
	</div>

	
	<!-- /block -->
	</div> 
	</div>
	</div>         
        </div>
<!--/.fluid-container-->
