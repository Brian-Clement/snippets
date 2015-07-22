<?php
	/* Image, Caption & Credit  */
?>
<?php
if (isset($entity->field_image[$entity->language][0]['uri']) && empty($entity->field_hide_image['und'][0]['value'])) {
  print '<div class="media-image mgb10">';
  $url = url('node/'. $entity->nid);
  $alt_default = $entity->field_image[$entity->language][0]['alt'];
  $title_default = $entity->field_image[$entity->language][0]['title'];
  
  if (empty($entity->field_large_image['und'][0]['value'])) {
  	$img_size = '300x225';
  }
  else {
  	$img_size = '731x411';
  }
  print '<span class="img-responsive img-thumbnail img-full">' . theme('image_style', array('path' => $entity->field_image[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) .'</span>';
  if (isset($entity->field_credit[$entity->language][0]['value'])) {
    print '<div class="credit mgt5">'. $entity->field_credit[$entity->language][0]['value'] .'</div>';
  }
  if (isset($entity->field_caption[$entity->language][0]['value'])) {
    print '<div class="caption">'. $entity->field_caption[$entity->language][0]['value'] .'</div>';
  }
  print '</div>';
}
?>