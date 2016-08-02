<?php
if (isset($entity->field_city['und'][0]['value'])) {
	$city = $entity->field_city['und'][0]['value'];	
}
if (isset($entity->field_state['und'][0]['value'])) {
	$state = $entity->field_state['und'][0]['value'];
}
if (isset($entity->field_company['und'][0]['value'])) {
	$restaurant = $entity->field_company['und'][0]['value'];
}
if (isset($city) && isset($state) && isset($restaurant)) {
	print $restaurant . ', ' . $city . ', ' . $state;
}
elseif (isset($city) && isset($state)) {
	print $city . ', ' . $state;
}
elseif (isset($restaurant)) {
	print $restaurant;
}
?>
