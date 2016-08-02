<!-- LANDING PAGE DISPLAY --> 
<?php
  $rightClass = 'col-sm-12 pl pr';
  $url = url('taxonomy/term/'. $entity->tid);
  if (isset($entity->field_logo['und'][0]['uri'])) {
    $rightClass = 'col-sm-8 pl';
    print '<div class="col-sm-4 pl">';    
    $alt_default = $entity->field_logo['und'][0]['field_file_image_alt_text'];
    $img_size = '600x600_landing_page';
    print '<span class="img-responsive"><a href="' . $url . '">' . theme('image_style', array('path' => $entity->field_logo['und'][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default)) .'</a></span>';
    print '</div>';
  }
  print '<div class="' . $rightClass . '"">';
  print '<div class="hgroup">';
  print '<h2 class="node-title mgt0"><a href="' . $url . '">' . $entity->name . '</a></h2>';
  print '</div>';
  if (isset($entity->field_event_date['und'][0]['value'])) {
    print '<div class="field-name-field-event-date font-gotham cl1">';
    $eventDate = strtotime( $entity->field_event_date['und'][0]['value'] );
    $eventDate = format_date($eventDate, 'custom', 'l, F j, Y');
    $apDate = csp_ap_date($eventDate);
    print $apDate;
    print '</div>';
  }  
  if (isset($entity->description)) {
    print '<div class="taxonomy-term-description">';
    print $entity->description;
    print '</div>';
  }  
  print '</div>';
?>


<!-- TERM PAGE DISPLAY -->
<?php
  $rightClass = 'col-sm-12 pl pr';
  if (isset($entity->field_logo['und'][0]['uri'])) {
    $rightClass = 'col-sm-8';
    print '<div class="col-sm-4">';    
    $alt_default = $entity->field_logo['und'][0]['field_file_image_alt_text'];
    $img_size = '600x600_landing_page';
    print '<span class="img-responsive">' . theme('image_style', array('path' => $entity->field_logo['und'][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default)) .'</span>';
    print '</div>';
  }
  print '<div class="' . $rightClass . '"">';
  if (isset($entity->field_event_date['und'][0]['value'])) {
    print '<div class="field-name-field-event-date font-gotham cl1">';
    $eventDate = strtotime( $entity->field_event_date['und'][0]['value'] );
    $eventDate = format_date($eventDate, 'custom', 'l, F j, Y');
    $apDate = csp_ap_date($eventDate);
    print $apDate;
    print '</div>';
  }  
  if (isset($entity->description)) {
    print '<div class="taxonomy-term-description">';
    print $entity->description;
    print '</div>';
  }  
  print '</div>';
?>




<!-- WITH HAND CODED AP DATE FORMATTING --> 
<?php
  $rightClass = 'col-sm-12';
  if (isset($entity->field_logo['und'][0]['uri'])) {
    $rightClass = 'col-sm-8';
    print '<div class="col-sm-4">';
    $url = url('node/'. $entity->tid);
    $alt_default = $entity->field_logo['und'][0]['field_file_image_alt_text'];
    $img_size = '600x600_landing_page';
    print '<span class="img-responsive">' . theme('image_style', array('path' => $entity->field_logo['und'][0]['uri'], 'style_name' => $img_size, 'alt' => $alt_default)) .'</span>';
    print '</div>';
  }
  print '<div class="' . $rightClass . '"">';
  print '<h2 class="node-title mgt0">' . $entity->name . '</h2>';
  if (isset($entity->field_event_date['und'][0]['value'])) {
    print '<div class="font-gotham cl1">';
    $eventDate = strtotime( $entity->field_event_date['und'][0]['value'] );
    //print format_date($eventDate, 'custom', 'l, M. j, Y');
    $eventDate = format_date($eventDate, 'custom', 'l, F j, Y');
    $apDate = str_replace(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'Septempber', 'October', 'November', 'December'), array('Jan.', 'Feb.', 'March', 'April', 'May', 'June', 'July', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.'), $eventDate);
    print $apDate;
    print '</div>';
  }  
  if (isset($entity->description)) {
    print '<div class="taxonomy-term-description">';
    print $entity->description;
    print '</div>';
  }  
  print '</div>';
?>