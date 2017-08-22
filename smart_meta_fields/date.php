<?php
	$date = new DateTime();
	if($value) {
		$date->setTimestamp($value);
	}
?>
<input type="text" id="<?php echo $id; ?>-datepicker" value="<?php echo strtolower($date->format('F j, Y')); ?>" readonly>
<input type="hidden" id="<?php echo $id; ?>" name="<?php echo $id; ?>" value="<?php echo $value; ?>" />
<script>
	jQuery( function() {
		jQuery('#<?php echo $id; ?>-datepicker').datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'MM d, yy',
			showOn: 'button',
			buttonText: '<?php _e('Välj datum', 'oddsonline'); ?>',
			onSelect : function(dateText, inst){
				var epoch = jQuery.datepicker.formatDate('@', jQuery(this).datepicker('getDate')) / 1000;
				jQuery('#<?php echo $id; ?>').val(epoch);
			}
		})
	} );
</script>