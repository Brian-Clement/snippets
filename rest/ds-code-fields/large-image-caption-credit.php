<!-- Large Image, Caption & Credit -->
<?php
if (isset($entity->field_image_large[$entity->language][0]['uri'])) {
  print '<div class="media-image">';
  $url = url('node/'. $entity->nid);
  $alt_default = $entity->field_image_large[$entity->language][0]['alt'];
  $title_default = $entity->field_image_large[$entity->language][0]['title'];
  $img_size = '731_x_411';
  print '<span class="img-responsive img-thumbnail">' . theme('image_style', array('path' => $entity->field_image_large[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) .'</span>';
  if (isset($entity->field_op_image_credit[$entity->language][0]['value'])) {
    print '<div class="credit">'. $entity->field_op_image_credit[$entity->language][0]['value'] .'</div>';
  }
  if (isset($entity->field_op_caption[$entity->language][0]['value'])) {
    print '<div class="caption">'. $entity->field_op_caption[$entity->language][0]['value'] .'</div>';
  }

  print '</div>';
}
?>


<!-- Large Image, Caption & Credit (Conditional) -->
<?php
if (isset($entity->field_image_large[$entity->language][0]['uri']) && empty($entity->field_op_main_image_display['und'][0]['value'])) {
  print '<div class="media-image">';
  $alt_default = $entity->field_image_large[$entity->language][0]['alt'];
  $title_default = $entity->field_image_large[$entity->language][0]['title'];
  $img_size = '731_x_411';

  print '<span class="img-responsive img-thumbnail">' . theme('image_style', array('path' => $entity->field_image_large[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)) . '</span>';
  if (isset($entity->field_op_image_credit[$entity->language][0]['value'])) {
    print '<div class="credit">'. $entity->field_op_image_credit[$entity->language][0]['value'] .'</div>';
  }
  if (isset($entity->field_op_caption[$entity->language][0]['value'])) {
    print '<div class="caption">'. $entity->field_op_caption[$entity->language][0]['value'] .'</div>';
  }
  
  print '</div>';
}
?>

<!-- Large Image, Caption & Credit (Landing Page) -->
<?php
if (isset($entity->field_image_large[$entity->language][0]['uri'])) {
  print '<div class="media-image">';
  $url = drupal_lookup_path('alias', 'node/'. $entity->nid);
  $alt_default = $entity->field_image_large[$entity->language][0]['alt'];
  $title_default = $entity->field_image_large[$entity->language][0]['title'];
  $img_size = '731_x_411';
  print '<span class="img-responsive img-thumbnail">' . l(theme('image_style', array('path' => $entity->field_image_large[$entity->language][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default, 'title' => $title_default)), $url, array('html' => TRUE)) .'</span>';
  if (isset($entity->field_op_image_credit[$entity->language][0]['value'])) {
    print '<div class="credit">'. $entity->field_op_image_credit[$entity->language][0]['value'] .'</div>';
  }
  if (isset($entity->field_op_caption[$entity->language][0]['value'])) {
    print '<div class="caption">'. $entity->field_op_caption[$entity->language][0]['value'] .'</div>';
  }

  print '</div>';
}
?>