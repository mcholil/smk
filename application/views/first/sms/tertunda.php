<!--span start--> <!-- RIGHT BLOCK -->
	<div class="span9" id="content">
	<div class="row-fluid">

<?php if($sms->num_rows()==0) //sementara biar ndak kelihatan
{?>	
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
	<?php echo anchor('sms/kirim/single','Kirim SMS','class="btn"'); ?> 
	<button class="btn btn-mid">Cari</button> 
	</div>
	

	<div class="row-fluid">
	<!-- block -->
	<div class="block">
	<div class="navbar navbar-inner block-header">
	<button class="btn">Kirim Ulang</button> 
	<button class="btn">Filter</button> 
	</div>

	<div class="block-content collapse in">
	<div class="span12">
	<table class="table table-striped">
	

	<tbody>
<?php 

foreach($sms->result() as $tmp):

if($type == 'outbox') 
{  ?>	
	<tr>
	<td><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></td>
	<td><?php echo $tmp->SendingDateTime?></td>
	<td><?php echo $tmp->DestinationNumber?></td>
	<td><?php echo $tmp->TextDecoded?></td>
	<td><?php echo $tmp->DeliveryReport?></td>
	</tr>
<?php } endforeach;  ?>
	<tr>
	<td><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></td>
	<td>23-04-2014</td>
	<td>Thornton</td>
	<td>@fat</td>
	<td>@mdo</td>
	</tr>

	<tr>
	<td><input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1"></td>
	<td>23-04-2014</td>
	<td>the Bird</td>
	<td>Thanks for Approval</td>
	<td>@mdo</td>  
	</tr>
	</tbody>
	</table>
	</div>


<div class="pagination  pull-right">  
<ul>  
<li><a href="#">First</a></li>  
<li> <a href="#">Prev</a>  </li>  
<li class="active"><a href="#">1</a></li>  
<li><a href="#">2</a></li>  
<li><a href="#">Next</a></li>  
<li><a href="#">Last</a></li>  
</ul>
</div>


	</div>
	</div>
	<!-- /block -->
	</div>
	</div>
	</div>
	</div>
<!--/.fluid-container-->
