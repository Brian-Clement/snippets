<?php
	if (isset($entity->field_section['und'][0]['tid'])) {
		$termid = $entity->field_section['und'][0]['tid'];
		$term = taxonomy_term_load($termid);
		$url = drupal_lookup_path('alias', 'taxonomy/term/'. $term->tid);
		print '<div class="breadcrumb-list section-title"><div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item"><span itemprop="title"><a href="/' . $url . '" itemprop="url">' . $term->name . '</a></span></div></div>';
	}
?>