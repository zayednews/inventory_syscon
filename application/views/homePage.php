<?php echo '<h2>Welcome - '.$this->session->userdata('email').'</h2>'; ?>
<?php echo '</p>'; ?>
<div class="tab">
	<!-- <?php if ($this->session->flashdata('category_success')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('category_success') ?> </div>
    <?php } ?> -->
	<?php
		 if($this->session->flashdata('success_msg'))
		 {
	?>
	 	<div class="alert alert-success">
	 	<?php echo $this->session->flashdata('success_msg');?>	
	 	</div>
	<?php
		 }
		 if($this->session->flashdata('error_msg'))
		 {
 	?>
 		<div class="alert alert-danger">
 	
 		<?php echo $this->session->flashdata('error_msg');?>	

 		</div>
 	<?php
 		}
 	?>