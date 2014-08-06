<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">


	<div class="navbar">
	</div>	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<h4>Grup</h4>
	</div>

	

	<div class="block-content collapse in">
	<div class="span12">



<!-- BEGIN FORM-->
	<?php echo form_open('pengaturan/update/grup', array('class' => 'form-horizontal'));?>
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
			<label class="control-label">Grup<span class="required">*</span></label>
			<div class="controls">
			<input type="text" value="<?php if(isset($pengaturan)) echo $pengaturan->row('nama');?>" name="nama" data-required="1" class="span6 m-wrap"/>
			</div>
			</div>
			
			<div class="control-group">
			<label class="control-label">Keterangan</label>
			<div class="controls">
			
			<textarea name="keterangan" style="resize:none; width:300px; height:150px;" placeholder="Isi sms ditulis disini. Anda tidak dapat mengirimkan SMS kosong...."><?php if(isset($pengaturan)) echo $pengaturan->row('keterangan');?></textarea>
			</div>
			</div>

			
  		<div class="form-actions">
			<?php echo form_submit('','Simpan','class="btn btn-primary"'); ?>
			<?php echo anchor('pengaturan/folder/grup','Batal','class="btn btn-primary"'); ?>
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
