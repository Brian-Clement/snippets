<?php
	// Original Date | Section | Source field
?>

<p class="article-meta"><?php print format_date($entity->created, 'custom', 'm-d-Y'); ?> 
<?php 
if (isset($entity->field_source['und'][0]['value'])) {
print '| Source: ' . $entity->field_source['und'][0]['value']; 
}
?> </p>


<?php
	// UPDATED Date | Section | Source field
	// Now with Author inclusion
?>
<?php
if (isset($entity->field_op_author) || isset($entity->field_source)) {
  print '<p class="article-meta">';
  if (isset($entity->field_op_author['und'])) {
    print format_date($entity->created, 'custom', 'm-d-Y');
    print ' | By&nbsp;';
    foreach ($entity->field_op_author['und'] as $author) {
      $author = node_load($author['nid']);
      print l($author->title, "node/". $author->nid);
      if (isset($author->field_profile_job_title['und'][0]['value']) && !empty($author->field_profile_job_title[$author->language][0]['value'])) {
        print ', '. $author->field_profile_job_title['und'][0]['value'];
      }
    }
    
  }
  elseif (isset($entity->field_source['und'][0]['value'])) {
    print format_date($entity->created, 'custom', 'm-d-Y') . ' | Source:&nbsp;' . $entity->field_source['und'][0]['value'];
  }
  print '</p>';
}
?>
