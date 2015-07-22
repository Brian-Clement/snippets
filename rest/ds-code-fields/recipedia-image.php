<!-- Node -->
<?php
	if (isset($entity->field_op_main_image[$entity->language][0]['uri'])) {
		$alt_default = $entity->field_op_main_image[$entity->language][0]['alt'];
		$title_default = $entity->field_op_main_image[$entity->language][0]['title'];
		$img_size = '731_x_411';
		print '<div class="field-type-image">' . theme('image_style', array('path' => $entity->field_op_main_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) .'</div>';
	}
	elseif (isset($entity->field_recipedia_image[$entity->language][0]['uri'])) {
		$alt_default = $entity->field_recipedia_image[$entity->language][0]['alt'];
		$title_default = $entity->field_recipedia_image[$entity->language][0]['title'];
		$img_size = '300_x_225';
		print '<div class="field-type-image">' . theme('image_style', array('path' => $entity->field_recipedia_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default))  . '</div>';
	}
?>



<!-- Landing Page -->
<?php
	if (isset($entity->field_op_main_image[$entity->language][0]['uri'])) {
		$url = drupal_lookup_path('alias', 'node/'. $entity->nid);
		$alt_default = $entity->field_op_main_image[$entity->language][0]['alt'];
		$title_default = $entity->field_op_main_image[$entity->language][0]['title'];
		$img_size = '212x212';
		print '<div class="field-type-image">' . l(theme('image_style', array('path' => $entity->field_op_main_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)), $url, array('html' => TRUE)) .'</div>';
	}
	elseif (isset($entity->field_recipedia_image[$entity->language][0]['uri'])) {
		$url = drupal_lookup_path('alias', 'node/'. $entity->nid);
		$alt_default = $entity->field_recipedia_image[$entity->language][0]['alt'];
		$title_default = $entity->field_recipedia_image[$entity->language][0]['title'];
		$img_size = '212x212';
		print '<div class="field-type-image">' . l(theme('image_style', array('path' => $entity->field_recipedia_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)), $url, array('html' => TRUE)) .'</div>';
	}
?>