<!-- 
*
** WITHOUT csp_ap_date() FUNCTION CALL 
*
-->
<?php
if (isset($entity->field_op_author)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid);
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', '. $author->field_profile_job_title['und'][0]['value'];
      }
    }
    $date = format_date($entity->created, 'custom', ', F j, Y');
    $array_replace = array('January' => 'Jan.',  'February' => 'Feb.', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'June' => 'June', 'July' => 'July', 'August' => 'Aug.', 'September' => 'Sept.', 'October' => 'Oct.', 'November' => 'Nov.', 'December' => 'Dec.');
    $apdate = strtr($date, $array_replace);
    print $apdate;
  }
  else {
    $date = format_date($entity->created, 'custom', ', F j, Y');
    $array_replace = array('January' => 'Jan.',  'February' => 'Feb.', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'June' => 'June', 'July' => 'July', 'August' => 'Aug.', 'September' => 'Sept.', 'October' => 'Oct.', 'November' => 'Nov.', 'December' => 'Dec.');
    $apdate = strtr($date, $array_replace);
    print $apdate;
  }
  print '</div>';
}
?>



<!-- 
*
** WITH csp_ap_date() FUNCTION CALL
*
-->
<?php
if (isset($entity->field_op_author)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid);
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', '. $author->field_profile_job_title['und'][0]['value'];
      }
    }
    $date = format_date($entity->created, 'custom', ', F j, Y');
    $apdate = csp_ap_date($date);
    print $apdate;
  }
  else {
    $date = format_date($entity->created, 'custom', 'F j, Y');
    $apdate = csp_ap_date($date);
    print $apdate;
  }
  print '</div>';
}
?>




<!-- 
*
** WITH csp_ap_date() FUNCTION CALL & ACCOUNT FOR MULTIPLE AUTHORS
*
-->
<?php
if (isset($entity->field_op_author)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid) . ', ';
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print $author->field_profile_job_title['und'][0]['value'] . ', ';
      }
    }
    $date = format_date($entity->created, 'custom', 'F j, Y');
    $apdate = csp_ap_date($date);
    print $apdate;
  }
  else {
    $date = format_date($entity->created, 'custom', 'F j, Y');
    $apdate = csp_ap_date($date);
    print $apdate;
  }
  print '</div>';
}
?>

