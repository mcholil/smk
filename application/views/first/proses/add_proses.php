<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">


	<div class="navbar">
	</div>	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Lihat Percakapan</button> 
	</div>

	

	<div class="block-content collapse in">
	<div class="span12">



<!-- BEGIN FORM-->
<?php echo form_open('proses/update/proses', array('class' => 'form-horizontal'));?>
	<fieldset>
	<div class="alert alert-error hide">
	<button class="close" data-dismiss="alert"></button>
	You have some form errors. Please check below.
	</div>
	<div class="alert alert-success hide">
	<button class="close" data-dismiss="alert"></button>
	Your form validation is successful!
	</div>
	
	<input type="hidden" name="id" id="id" value="<?php if(isset($proses)) echo $proses->row('id');?>" />

	<div class="control-group">
	<label class="control-label">Pengirim </label>
	<div class="controls">
	
	 <input class="input-xlarge disabled" id="disabledInput" type="text" placeholder="<?php if(isset($proses)) echo $proses->row('id_user');?>" disabled="">
	<input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"> Rahasiakan Pengirim
	</div>
	</div>
		
		
	<div class="control-group">
	<label class="control-label">Judul<span class="required">*</span></label>
	<div class="controls">
	<input type="text" name="judul" style="width:80%;" value="<?php if(isset($proses)) echo $proses->row('judul');?>" data-required="1" class="span6 m-wrap"/>
	</div>
	</div>
			
	<div class="control-group">
        <label class="control-label" for="textarea2">Rangkuman</label>
        <div class="controls">
        <textarea class="input-xlarge textarea" name="rangkuman"  placeholder="Enter text ..." style="width: 90%; height: 200px"><?php if(isset($proses)) echo $proses->row('rangkuman');?></textarea>
        </div>
        </div>


	<div class="control-group">
        <label class="control-label" for="textarea2">Keterangan</label>
        <div class="controls">
        <textarea class="input-xlarge textarea" name="keterangan" placeholder="Enter text ..." style="width: 90%; height: 200px"><?php if(isset($proses)) echo $proses->row('keterangan');?></textarea>
        </div>
        </div>

			
	<div class="control-group">
        <label class="control-label" for="textarea2">Catatan Terusan</label>
        <div class="controls">
        <textarea class="input-xlarge textarea" name="terusan" placeholder="Enter text ..." style="width: 90%; height: 200px"><?php if(isset($proses)) echo $proses->row('terusan');?></textarea>
        </div>
        </div>


	<div class="control-group">
  	<label class="control-label">Kategori Isu <span class="required">*</span></label>
  	<div class="controls">
  	<select class="span6 m-wrap" name="category">
  	<option value="">Select...</option>
  		
	<?php if(!empty($kategori)){ foreach($kategori->result() as $kat) { echo "<option value='". $kat->id."'>".$kat->nama."</option>"; }}?>	
  	</select>
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
  		
	<?php if(!empty($desa)){ foreach($desa->result() as $des) { echo "<option value='". $des->id."'>".$des->nama."</option>"; } } else { echo "<option value='". $des->id."'>".$des->nama."</option>"; } ?>	
  	</select>
  	</div>
  	</div>


	<div class="control-group">
        <label class="control-label" for="date01">Tanggal </label>
        <div class="controls">
        <input type="text" class="input-xlarge datepicker" id="date01" value="<?php if(isset($proses)) echo $proses->row('tgl_proses');?>">
        </div>
        </div>

<div class="control-group">
    <div class="controls btn-group" data-toggle="buttons-checkbox">
    <button type="button" class="btn">1 Revisi</button>
    <button type="button" class="btn">2 Rilis</button>
    <button type="button" class="btn">3 Arsip</button>
    </div>
</div>
			
  	<div class="form-actions">
			
<?php echo form_submit('','Simpan','class="btn btn-primary"'); ?> 
<?php echo anchor('proses/folder/proses','Batal', 'class="btn btn-primary"'); ?>

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
