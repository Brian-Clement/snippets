<?php
	if (isset($entity->field_image_large[$entity->language][0]['uri'])) {
		$alt_default = $entity->field_image_large[$entity->language][0]['alt'];
		$title_default = $entity->field_image_large[$entity->language][0]['title'];
		$img_size = 'full_width';
		print '<span class="img-responsive">' . theme('image_style', array('path' => $entity->field_image_large[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) .'</span>';
	}
	elseif (isset($entity->field_op_main_image[$entity->language][0]['uri'])) {
		$alt_default = $entity->field_op_main_image[$entity->language][0]['alt'];
		$title_default = $entity->field_op_main_image[$entity->language][0]['title'];
		$img_size = 'full_width';
		print '<span class="img-responsive">' . theme('image_style', array('path' => $entity->field_op_main_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) .'</span>';
	}
?>
