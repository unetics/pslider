<?php
// Register sidebar menu
add_action('admin_menu', 'layerslider_settings_menu');
function layerslider_settings_menu() {
	add_menu_page(
			'Slider',
			'Slider',
			'manage_options', 
			'layerslider', 
			'layerslider_router',
			'dashicons-slides',
			59
		);
}

function layerslider_router() {
	if(isset($_GET['action']) && $_GET['action'] == 'edit') {
		include(LS_ROOT_PATH.'/views/slider_edit.php');
	} else {
		include(LS_ROOT_PATH.'/views/slider_list.php');
	}
}