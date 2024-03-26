<?php
/*
* Addon: zoom
*/

add_action('wp_footer', 'lookbook_zoom', 11);

	function lookbook_zoom()
	{
		global $data_addon;
		 $zoom = $data_addon['zoom_select_field_id'];
		if ( empty($zoom)) { $zoom = '1'; }

		print('
			<!-- lookbook zoom -->
			<script>
				jQuery(document).ready(function($){
					$(".lookbook-photo").zoom({ on:"grab", magnify: "'. $zoom .'" });	
				});
			</script>
			<!-- end lookbook zoom --> 
		');
	}