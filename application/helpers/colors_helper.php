<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function color_in_selected_colors($selected_colors, $color) {
	$status = false;

	foreach($selected_colors as $select_color) {
		if($color->id == $select_color->color_id) {
			$status = true;
		}
	}

	// var_dump($status);

	return $status;
}