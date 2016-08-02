<!-- Sponsor Logo/Title -->
<?php
if (isset($entity->field_logo[$entity->language][0]['uri'])) {
	print '<div class="field-name-sponsored-by">' . theme('image_style', array('path' => $entity->field_logo[$entity->language][0]['uri'], 'style_name' => 'sponsor', 'alt' => $entity->field_logo[$entity->language][0]['alt'])) . '</div>';
}
elseif (isset($entity->title)) {
	print '<div class="field-name-title"><div class="field-item"><h2>' . $entity->title . '</h2></div></div>';
}
?>