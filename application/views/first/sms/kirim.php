<!--span start--> <!-- RIGHT BLOCK -->

<div class="span9" id="content">

<div class="navbar">
</div>

<div class="row-fluid">
<!-- block -->
<div class="block">
<div class="navbar navbar-inner block-header">
<?php echo anchor('sms/kirim/single','Registered','class="btn"'); ?> <?php echo anchor('sms/kirim/masal','Kelompok','class="btn"'); ?> 

 					
</div>
<div class="block-content collapse in">
<?php echo form_open('sms/kirim_proses/single', array('class' => 'form-horizontal'));?>
	<table style="width:100%; margin-top:10px; ">
	<tr>
	<td style="border-right: 1px solid #e3e2e2; padding-left: 5px; width: 50%;">


	<table class="table_form">
	<tr>
	<td style="width:10%;">Nomor Tujuan</td>
	<td><input type="text" name="no_hp" value="" id="no_hp"></td>
	</tr>
	<tr>
	<td>Isi SMS</td>
	<td><textarea name="isi_sms" id="isi_sms" style="resize:none; width:300px; height:150px;" placeholder="Isi sms ditulis disini. Anda tidak dapat mengirimkan SMS kosong...."></textarea></td>
	</tr>
        <tr>
	<td colspan="3">
	
	<button type="submit" class="btn btn-primary" style="float:right; margin-right:40px;">Kirim </button> 
	<button style="margin-left:40px;" type="submit" class="btn btn-primary">Reset </button> 
	<button type="submit" class="btn btn-primary">Batal </button> 
	</td>
	</tr>
        </table>
	</td>

<?php echo form_close();?>
        <td style="padding-left:20px; padding-right: 20px; width: 50%;">
<?php echo form_open('sms/kirim/single/', array('class' => 'form-horizontal'));?>
	<input name="cari" placeholder="Cari nomer kontak ..." value="<?php if (isset($cari)) echo $cari;?>" type="text" class="input-medium search-query"  >
	<button type="submit" class="btn">Cari</button>
        <div id="checkbox" style="overflow: auto; min-height:250px; max-height: 300px; width:100%;">
        <table class="table" style="margin-top:10px;">
        <tr>
	
	</tr>
<?php foreach($sms->result() as $tmp): ?>
        <tr>
	<td>
	<label class="checkbox">
	<input type='checkbox' value="<?php echo $tmp->no_hp?>"/> <?php echo $tmp->nama?> 
	</label>
	</td>

	<td><?php echo $tmp->no_hp?></td>
	</tr>
<?php endforeach; ?>
	
        </table>

        </div>
	</td>
	</tr>
	</table>
<?php echo form_close();?>
</div>
</div>
</div>
</div>


