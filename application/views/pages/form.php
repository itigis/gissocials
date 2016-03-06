<?php echo form_open('Pages'); ?>
<?php  ?>
<?php 
    foreach ($inputs as $label => $input) {
		echo form_label($label);
		echo form_input($input);
		echo '<br>';
	}
	
	echo form_submit('submit', 'Submit');

?>
<?php echo form_close(); ?>