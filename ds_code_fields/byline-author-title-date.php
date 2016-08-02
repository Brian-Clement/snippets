<?php
  /*
   * Byline: Author, Title, Date
  */
?>
<?php
$date = format_date($entity->created, 'custom', 'F j, Y');
$apdate = csp_ap_date($date);
if (isset($entity->field_author)) {
  print '<div class="byline nb">';
  if (isset($entity->field_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_author['und'] as $author) {
      $author = node_load($author['nid']);
      print '<div itemscope itemtype="http://schema.org/Person" style="display: inline;"><span itemprop="name">' . l($author->title, "node/". $author->nid) . '</span>';
      if (isset($author->field_job_title['und'][0]['value']) && !empty($author->field_job_title[$author->language][0]['value'])) {
        print ', <span itemprop="jobTitle">'. $author->field_job_title['und'][0]['value'] . '</span>';
      }
      print ' on '.$apdate;
      print '</div><br />';
    }
  }
  elseif (isset($entity->field_source['und'][0]['value'])) {
    print 'From&nbsp;' . $entity->field_source['und'][0]['value'] . ' on '.$apdate;
  }
  else {
    print $apdate;
  }  
  print '</div>';
}
?>


<?php
  /*
   * Byline: Author, Title, Date 
   * WITHOUT CSP AP DATE FUNCTION 
   * Schema markup included
  */
?>
<?php
if (isset($entity->field_author)) {
  print '<div class="byline nb">';
  if (isset($entity->field_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_author['und'] as $author) {
      $author = node_load($author['nid']);
      print '<div itemscope itemtype="http://schema.org/Person" style="display: inline;"><span itemprop="name">' . l($author->title, "node/". $author->nid) . '</span>';
      if (isset($author->field_job_title['und'][0]['value']) && !empty($author->field_job_title[$author->language][0]['value'])) {
        print ', <span itemprop="jobTitle">'. $author->field_job_title['und'][0]['value'] . '</span>';
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


<?php
  /*
   * Byline: Author, Title, Date 
   * WITHOUT CSP AP DATE FUNCTION 
  */
?>
<?php
if (isset($entity->field_author)) {
  print '<div class="byline nb">';
  if (isset($entity->field_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid);
      if (isset($author->field_job_title['und'][0]['value']) && !empty($author->field_job_title[$author->language][0]['value'])) {
        print ', '. $author->field_job_title['und'][0]['value'];
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