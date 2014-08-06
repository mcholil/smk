     <!--/span-->
                <div class="span12" id="content">
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
			

                        <div class="navbar">

                        </div>
                    	</div>
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
					<button class="btn">Edit</button> 
                            </div>
                            <div class="block-content collapse in">
           <div class="span12">
<!-- BEGIN Table-->
		<table class="table table-striped">
						             
	<tbody>
		<tr>
		<td>Nama Komunitas</td>
		<td><?php if(isset($config)) echo $config->row('username');?></td>  
		</tr>
	
               
 
		<tr>
                <td>SMS Balasan</td>
                <td><?php if(isset($config)) echo $config->row('jk');?></td>
		</tr>
 
		
		</tbody>
		</table>
<!-- END Table -->
		</div>
		    </div>
		</div>
                    	<!-- /block -->
