<!--span start--> <!-- RIGHT BLOCK -->

<div class="span9" id="content">

<div class="navbar">
</div>

<div class="row-fluid">
<!-- block -->
<div class="block">
<div class="navbar navbar-inner block-header">
<button class="btn">Kembali</button> 
					
</div>
<div class="block-content collapse in">

<div class="">
<div class="conversation_window">

<?php foreach($sms->result() as $tmp): ?>
<?php if ($tmp->tipe == "in") { ?>
<div class="bubble in"><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"> <?php echo $tmp->isi ?><p class="info"><?php echo $tmp->tgl ?> | <?php echo $tmp->no ?></p></div>
<?php } else if ($tmp->tipe == "out") { ?>
<div class="bubble out"><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"> <?php echo $tmp->isi ?><p class="info"><?php echo $tmp->tgl ?> | <?php echo $tmp->no ?></p></div>
<?php } ?>
<?php  endforeach;  ?>
</div>

<div class="sms_form">
<?php echo form_open('sms/kirim_proses/single', array('class' => 'form-horizontal'));?>
<table class="table_form" style="width:100%;">
<tr>
<td style="width:15%;"><b>Nomor Tujuan</b></td>
<td><input type="text" name="no_hp" value="<?php if(isset($sms)) echo $sms->row('no');?>" readonly></td>
<td></td></tr>
<tr>
<td style="width:15%;"><b>Isi SMS</b></td>
<td style="width:45%"><textarea name="isi_sms" style="resize:none; width:100%; height:150px;" placeholder="Isi sms ditulis disini. Anda tidak dapat mengirimkan SMS kosong...."></textarea></td>
<td><button type="submit" class="btn btn-warning" style="float:left; margin-left:35px;">Balas Pesan</button></td></tr>
<tr>
<td colspan="3"></td></tr>
</table>
</form>
<form method="POST"  action=">">
<table class="table_form" style="width:100%;">
<tr>
<td style="width:15%;"></td>
<td><button type="submit" style="float:left; margin-right:10px;" class="btn btn-danger" ><i class="icon-check icon-white" ></i> Setujui proses</button></td></tr>
</table>
<?php echo form_close();?>
</div>
</div>
</div>
</div>
