<!-- News Byline (Landing Page) -->
<!-- This will display on landing pages only -->
<?php
if (isset($entity->field_op_author) || isset($entity->field_source)) {
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
    print format_date($entity->created, 'custom', ', M. j, Y');
  }
  elseif (isset($entity->field_source['und'][0]['value'])) {
    print 'From&nbsp;' . $entity->field_source['und'][0]['value'];
  }
  print '</div>';
}
?>


<!-- News Byline (Landing Page) WITH AP DATE FORMAT -->
<!-- This will display on landing pages only -->
<?php
$date = format_date($entity->created, 'custom', 'F j, Y');
$apdate = csp_ap_date($date);
if (isset($entity->field_op_author) || isset($entity->field_source)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid);
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', '. $author->field_profile_job_title['und'][0]['value'] . ', ';
      }
      else {
        print ',&nbsp;';
      }
    }
    print $apdate;
  }
  elseif (isset($entity->field_source['und'][0]['value'])) {
    print 'From&nbsp;' . $entity->field_source['und'][0]['value'] . ', ';
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


<!-- News Byline (Node) NO AP DATE = DEPRECATED -->
<!-- This will display in News Article nodes -->
<?php
if (isset($entity->field_op_author) || isset($entity->field_source)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print '<div itemscope itemtype="http://schema.org/Person" style="display: inline;"><span itemprop="name">' . l($author->title, "node/". $author->nid) . '</span>';
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', <span itemprop="jobTitle">'. $author->field_profile_job_title['und'][0]['value'] . '</span>';
      }
      print ' on '.format_date($entity->created, 'custom', ' M. j, Y');
      print '</div><br />';
    }
  }
  elseif (isset($entity->field_source['und'][0]['value'])) {
    print 'From&nbsp;' . $entity->field_source['und'][0]['value'] . ' on '.format_date($entity->created, 'custom', ' M. j, Y');
  }
  print '</div>';
}
?>



<!-- News Byline (Node) WITH AP DATE FORMAT -->
<!-- This will display in News Article nodes -->
<?php
$date = format_date($entity->created, 'custom', 'F j, Y');
$apdate = csp_ap_date($date);
if (isset($entity->field_op_author) || isset($entity->field_source)) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print '<div itemscope itemtype="http://schema.org/Person" style="display: inline;"><span itemprop="name">' . l($author->title, "node/". $author->nid) . '</span>';
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', <span itemprop="jobTitle">'. $author->field_profile_job_title['und'][0]['value'] . '</span>';
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