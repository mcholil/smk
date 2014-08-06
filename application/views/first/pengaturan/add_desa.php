<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">


	<div class="navbar">
	</div>	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<h4>Desa</h4>
	</div>

	

	<div class="block-content collapse in">
	<div class="span12">



<!-- BEGIN FORM-->
		<?php echo form_open('pengaturan/update/desa', array('class' => 'form-horizontal'));?>
		<fieldset>
			<div class="alert alert-error hide">
			<button class="close" data-dismiss="alert"></button>
				You have some form errors. Please check below.
			</div>
			<div class="alert alert-success hide">
			<button class="close" data-dismiss="alert"></button>
			Your form validation is successful!
			</div>

			<input type="hidden" name="id_kec" id="id_kec" value="<?php if(isset($kec)) echo $kec->row('id');?>" />	

			<div class="control-group">
  			<label class="control-label">Kabupaten <span class="required">*</span></label>
  			<div class="controls">
  			<input  class="input-xlarge disabled" id="disabledInput" type="text" name="name" value="<?php if(isset($kec)) echo $kec->row('id_kab');?>"  disabled=""/>
  			</div>
  			</div>
			
			<div class="control-group">
  			<label class="control-label">Kecamatan <span class="required">*</span></label>
  			<div class="controls">
  			<input  class="input-xlarge disabled" id="disabledInput" type="text" name="name" value="<?php if(isset($kec)) echo $kec->row('nama');?>"  disabled=""/>
  			</div>
  			</div>
			
			<div class="control-group">
			<label class="control-label">Nama Desa<span class="required">*</span></label>
			<div class="controls">
			<input type="text" value="<?php if(isset($pengaturan)) echo $pengaturan->row('nama');?>" name="nama" data-required="1" class="span6 m-wrap"/>
			</div>
			</div>
			
				
  		<div class="form-actions">
			<?php echo form_submit('','Simpan','class="btn btn-primary"'); ?>
			<?php echo anchor('pengaturan/detail/desa','Batal','class="btn btn-primary"'); ?>
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
