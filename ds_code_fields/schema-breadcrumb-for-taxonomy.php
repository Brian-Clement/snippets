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





<!-- THIS WORKS -->

[term:parents-all:1:url]
[term:parents-all:1:name]


<div class="breadcrumb-list">
	<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="breadcrumb-item">
		<span itemprop="title"><a class=" restaurant-news" href="[term:parents-all:1:url]" itemprop="url">[term:parents-all:1:name]</a></span>
	</div>
</div>

