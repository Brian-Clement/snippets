<div class="breadcrumb-list">
	<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
		<span itemprop="title"><a class=" business-trends" href="/business-trends" itemprop="url">Business Trends</a></span>
	</div>
	&gt;
	<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
		<span itemprop="title"><a class=" restaurant-news" href="/business-trends/restaurant-news" itemprop="url">Restaurant News</a></span>
	</div>
</div>

<!-- THIS IS THE WINNER -->
<?php if (isset($entity->field_section_new[$entity->language])): ?>
	<?php foreach($entity->field_section_new[$entity->language] as $tid){ ?>
	  	<?php $term = taxonomy_term_load($tid['tid']);?> 
	  	<?php $url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid); ?>
	  	<div class="breadcrumb-list">
			<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
				<span itemprop="title"><a href="/<?php print $url; ?>" itemprop="url"><?php print $term->name; ?></a></span>
			</div>
		</div>
	<?php } ?>
<?php endif; ?>
<!-- THIS IS THE WINNER -->



<!-- 
*
**
***		MODIFICATIONS REQUIRED FOR EVENT TAXONOMY TERM PAGES
**
*
-->

<!-- FIRST WORKING COPY FOR EVENTS TERM PAGES -->
<?php if (isset($entity->field_section_new['und'][0]['tid'])): ?>
	  	<?php $termid = $entity->field_section_new['und'][0]['tid'];?> 
	  	<?php $term = taxonomy_term_load($termid);?> 
	  	<?php $url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid); ?>
	  	<div class="breadcrumb-list">
			<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
				<span itemprop="title"><a class=" restaurant-news" href="/<?php print $url; ?>" itemprop="url"><?php print $term->name; ?></a></span>
			</div>
		</div>
<?php endif; ?>

<!-- THIS IS THE WINNER ? -->
<?php
	if (isset($entity->field_section_new['und'][0]['tid'])) {
		$termid = $entity->field_section_new['und'][0]['tid'];
		$term = taxonomy_term_load($termid);
		$url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
		print '<div class="breadcrumb-list"><div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url . '" itemprop="url">' . $term->name . '</a></span></div></div>';
	}
?>


<!-- 
*
**
***		END MODIFICATIONS REQUIRED FOR EVENT TAXONOMY TERM PAGES
**
*
-->


<?php
  krumo(get_defined_vars());
?>





<?php if (isset($entity->field_section_new[$entity->language])): ?>
   
   <?php $terms = array(); ?>
   <?php foreach($entity->field_section_new[$entity->language] as $tid){ ?>
   <?php $term = taxonomy_term_load($tid['tid']);?>
   <?php } ?>
   <pre>
   <?php print_r($entity->field_section_new['und'][0]['hs_lineages'][1]); ?>
   <?php print_r($term); ?>
   </pre>
   <div class="breadcrumb-list">
		<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
			<span itemprop="title"><a class=" restaurant-news" href="/business-trends/restaurant-news" itemprop="url"><?php echo $entity->field_section_new['und'][0]['hs_lineages'][1]['label']; ?></a></span>
		</div>
	</div>
<?php endif; ?>


<?php
if (isset($entity->field_section_new[$entity->language])) {
	print '<pre>';
	foreach($entity->field_section_new[$entity->language] as $tid) {
		$term = taxonomy_term_load($tid); // load term object
		$term_uri = taxonomy_term_uri($term); // get array with path
		$term_title = taxonomy_term_title($term);
		$term_path = $term_uri['path'];
		$link = l($term_title,$term_path);
		print '$term ' . $term . '<br />';
		print '$term_uri ' . $term_uri . '<br />';
		print '$term_title ' . $term_title . '<br />';
		print '$term_path ' . $term_path . '<br />';
		print '$link ' . $link . '<br />';
		print_r($term_uri);
	}
	print '</pre>';
}
?>




<?php if (isset($entity->field_section_new[$entity->language])): ?>
	<?php foreach($entity->field_section_new[$entity->language] as $tid){ ?>
	  	<?php $term = taxonomy_term_load($tid['tid']);?> 
	  	<?php $url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid); ?>
	  	<div class="breadcrumb-list">
			<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
				<span itemprop="title"><a class=" restaurant-news" href="/<?php print $url; ?>" itemprop="url"><?php print $term->name; ?></a></span>
			</div>
		</div>
	<?php } ?>
<?php endif; ?>



<?php if (isset($entity->field_section_new[$entity->language])): ?>
   <?php $terms = array(); ?> <!-- Sets up an empty array called $terms -->
   <?php foreach($entity->field_section_new[$entity->language] as $tid){ ?>
  <?php $term = taxonomy_term_load($tid['tid']);?> 
  	<?php $url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid, $lang_code); ?> <!-- lookup the alias URL part of the term by term ID -->
  	<?php $fullURL = $GLOBALS['base_url'] . '/' . $url; ?> <!-- Combine the URL part with the base URL -->
  	<?php print $fullURL; ?> <!-- Output the final URL -->
  	<?php print $term->name; ?>
  	<?php $terms[] = l($term->name, 'taxonomy/term/' . $term->tid); ?>
  <?php } ?>
  <?php print_r($terms[0]); ?>
  <?php print '<span>' . implode('</span>, <span>', $terms) . '</span>'; ?>
<?php endif; ?>








<?php if (isset($entity->field_section_new[$entity->language])): ?>
   <?php $terms = array(); ?>
   <span>Breadcrumbs :</span>
   <?php foreach($entity->field_section_new[$entity->language] as $tid){ ?>
  <?php $term = taxonomy_term_load($tid['tid']);?>  
    <?php $terms[] = l($term->name, 'taxonomy/term/' . $term->tid); ?>
  <?php } ?>
  <?php print '<span>' . implode('</span>, <span>', $terms) . '</span>'; ?>
<?php endif; ?>







<?php if (isset($entity->field_channel[$entity->language])): ?>
   <?php $terms = array(); ?>
   <span>Tags :</span>
   <?php foreach($entity->field_channel[$entity->language] as $tid){ ?>
  <?php $term = taxonomy_term_load($tid['tid']);?>  
    <?php $terms[] = l($term->name, 'taxonomy/term/' . $term->tid); ?>
  <?php } ?>
  <?php print '<span>' . implode('</span>, <span>', $terms) . '</span>'; ?>
<?php endif; ?>