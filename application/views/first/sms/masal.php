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
<?php echo form_open('sms/kirim_proses/masal', array('class' => 'form-horizontal'));?>
	<table style="width:100%; margin-top:0px;">
	<tr>
	<td style="border-right: 1px solid #e3e2e2; ">
	<table class="table_form">
	<tr><td style="width:10%;">Isi SMS</td>
	<td>
	<textarea name="isi_sms" style="resize:none; width:300px; height:150px; margin-right:30px;" placeholder="Isi sms ditulis disini. Anda tidak dapat mengirimkan SMS kosong...."></textarea>
	</td></tr>
	<tr><td colspan="2"><button type="submit" class="btn btn-primary" style="float:right; margin-right:40px;">Kirim Pesan</button></td></tr>
	</table>
	</td>

	<td style="padding-left: 30px;">
	<div style="overflow: auto; max-height: 300px; min-height:250px; width:450px;">
	<table class="table">
	<tr>
	<td style="width:5%;"><input type="radio" name="filter" value="kab" /></td>
	<td style="padding-top: 12px;">Kabupaten</td>
	<td>
	<select name="kab" style="width:70%;">
	<option value="all">Semua</option>
	<?php if(!empty($kabupaten)){ foreach($kabupaten->result() as $kab) { echo "<option value='". $kab->id."'>".$kab->nama."</option>"; }}?>
	</select>
	</td>
	</tr>

	<tr><td style="width:5%;">
	<input type="radio" name="filter" value="kec" />
	</td>
	<td style="padding-top: 12px; width:20%;">Kecamatan</td>
	<td>
	<select name="kec" style="width:70%;">
	<option value="all">Semua</option>
	<?php if(!empty($kecamatan)){ foreach($kecamatan->result() as $kec) { echo "<option value='". $kec->id."'>".$kec->nama."</option>"; }}?>

	</select></td></tr>
	<tr><td style="width:5%;"><input type="radio" name="filter" value="des" /></td>
	<td style="padding-top: 12px;">Desa</td>
	<td><select name="des" style="width:70%;"><option value="all">Semua</option>
	<?php if(!empty($desa)){ foreach($desa->result() as $des) { echo "<option value='". $des->id."'>".$des->nama."</option>"; }}?></select></td></tr>
	<tr><td style="width:5%;"></td><td style="padding-top: 12px;">Group SMS</td>
	<td><select name="grup" style="width:70%;"><option value="all">Semua</option>
	<?php if(!empty($grup)){ foreach($grup->result() as $gru) { echo "<option value='". $gru->id."'>".$gru->nama."</option>"; }}?>

	</select></td></tr>
	</table>
            </div></td></tr>
</table>
<?php echo form_close();?>
        </div>
	</td>
	</tr>
	</table>

</div>
</div>
</div>
</div>


