<?php 
$this->load->helper('html');
echo doctype('xhtml1-trans');?>
<html>
<head><?php echo $this->load->view('first/head');?></head>
<body>
<?php echo $this->load->view('first/top');?>
<!--.container-begin --> 

<div class="container-fluid">
<div class="row-fluid">
<!-- LEFT BLOCK -->
<div class="span3" id="sidebar">
<?php echo $this->load->view($menu);?>
</div>
<!--/ LEFT BLOCK -->     
<!-- RIGHT BLOCK -->	
<?php echo $this->load->view($right);?>
<!--/ RIGHT BLOCK -->
</div>      
</div>
<?php echo $this->load->view('first/footer');?>
</body>
</html>
