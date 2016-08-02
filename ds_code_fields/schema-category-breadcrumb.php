<?php
	/*
	 * Schema Category Breadcrumb 
	 * Top level term only
	*/
?>

<?php
	if (isset($entity->field_category['und'][0]['tid'])) {
		$termid = $entity->field_category['und'][0]['tid'];
		$term = taxonomy_term_load($termid);
		$url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
		print '<div class="breadcrumb-list section-title"><div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url . '" itemprop="url">' . $term->name . '</a></span></div></div>';
	}
?>


<?php
	/*
	 * Schema Category Breadcrumb 
	 * Top and Bottom level terms
	*/
?>

<?php
	if (isset($entity->field_category['und'][1]['tid'])) {
		$termid = $entity->field_category['und'][0]['tid'];
		$termid2 = $entity->field_category['und'][1]['tid'];
		$term = taxonomy_term_load($termid);
		$term2 = taxonomy_term_load($termid2);
		$url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
		$url2 = drupal_lookup_path('alias', 'taxonomy/term/'. $term2->tid);
		print '<div class="breadcrumb-list section-title"><div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url . '" itemprop="url">' . $term->name . '</a></span></div>&nbsp;|&nbsp;<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url2 . '" itemprop="url">' . $term2->name . '</a></span></div></div>';
	}
	elseif (isset($entity->field_category['und'][0]['tid'])) {
		$termid = $entity->field_category['und'][0]['tid'];
		$term = taxonomy_term_load($termid);
		$url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
		print '<div class="breadcrumb-list"><div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url . '" itemprop="url">' . $term->name . '</a></span></div></div>';
	}
?>
