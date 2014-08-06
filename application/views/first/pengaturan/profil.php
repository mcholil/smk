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
		<td>Nama Pengguna</td>
		<td><?php if(isset($profil)) echo $profil->row('username');?></td>  
		</tr>

		<tr>
	        <td>Nama Lengkap</td>
		<td><?php if(isset($profil)) echo $profil->row('nama');?></td>
		</tr>
		
                <tr>
          	<td>Alamat</td>
		<td><?php if(isset($profil)) echo $profil->row('alamat');?> </td>
		</tr>

		<tr>
               	<td>Profesi</td>
		<td><?php if(isset($profil)) echo $profil->row('profesi');?></td>
		</tr>
 
		<tr>
		<td>No hp</td>
		<td><?php if(isset($profil)) echo $profil->row('no_hp');?></td>
		</tr>
 
		<tr>
                <td>Jenis Kelamin</td>
                <td><?php if(isset($profil)) echo $profil->row('jk');?></td>
		</tr>
 
		<tr>
                <td>Tanggal Lahir</td>
                <td><?php if(isset($profil)) echo $profil->row('tgl_lahir');?></td>
		</tr>
 
		<tr>
                <td>Kabupaten</td>
                <td><?php if(isset($profil)) echo $profil->row('id_desa');?></td>
	  	</tr>

		<tr>
               	<td>Kecamatan</td>
		<td><?php if(isset($profil)) echo $profil->row('id_desa');?></td>
		</tr>

		<tr>
                <td>Desa</td>
                <td><?php if(isset($profil)) echo $profil->row('id_desa');?></td>
		</tr>

		<td>Status</td>
		<td><?php if(isset($profil)) echo $profil->row('active');?></td>
		</tr>

						              </tbody>
						            </table>
<!-- END Table -->
		</div>
		    </div>
		</div>
                    	<!-- /block -->
