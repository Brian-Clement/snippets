<!-- Sponsored Content Byline -->
<?php
if (isset($entity->field_op_author) || isset($entity->field_sponsor_taxonomy[$entity->language])) {
  print '<div class="byline">';
  if (isset($entity->field_op_author['und'])) {
    print 'By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print '<div itemscope itemtype="http://schema.org/Person" style="display: inline;"><span itemprop="name">' . l($author->title, "node/". $author->nid) . '</span>';
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', <span itemprop="jobTitle">'. $author->field_profile_job_title['und'][0]['value'] . '</span>';
      }
      //print ' on '.format_date($entity->created, 'custom', ' M. j, Y');
      $date = format_date($entity->created, 'custom', 'F j, Y');
      $apdate = csp_ap_date($date);
      print ' on '.$apdate;
      print '</div><br />';
    }
  }
  elseif (isset($entity->field_sponsor_taxonomy[$entity->language])) {
    print 'From&nbsp;';
    foreach ($entity->field_sponsor_taxonomy[$entity->language] as $tid) {
      $term = taxonomy_term_load($tid['tid']);
      $url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
      print '<div style="display: inline;"><span>' . l($term->name, $url) . '</span>';
      //print ' on '.format_date($entity->created, 'custom', ' M. j, Y');
      $date = format_date($entity->created, 'custom', 'F j, Y');
      $apdate = csp_ap_date($date);
      print ' on '.$apdate;
      print '</div><br />';
    }
  }
  print '</div>';
}
?>