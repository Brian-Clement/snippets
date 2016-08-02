<?php
/*
 *  BC UPDATED CODE for LW revisiosn 6/22
 */
?>

<?php
  $city = $entity->field_city['und'][0]['value']; 
  $state = $entity->field_state['und'][0]['value'];
  $local = $city . ', ' . $state; 
  $sales = $entity->field_systemwide_sales['und'][0]['value'];  
  $salesprint = '$' . number_format($sales);
  if (!empty($entity->field_systemwide_sales_estimate['und'][0]['value'])) {
    $salesprint = $salesprint . '*';
  }
  $saleschange = $entity->field_sales_percentage_change['und'][0]['value']; 
  $total_units = $entity->field_total_units['und'][0]['value']; 
  $average_unit_volume = $entity->field_average_unit_volume['und'][0]['value'];
  $average_unit_volume_print = '$' . number_format($average_unit_volume);
  if (!empty($entity->field_average_unit_volume_estima['und'][0]['value'])) {
    $average_unit_volume_print = $average_unit_volume_print . '*';
  }
  $units_open_percent_change = $entity->field_units_open_percent_change['und'][0]['value']; 
  $unit_volume_percentage_cha = $entity->field_unit_volume_percentage_cha['und'][0]['value'];
  if (isset($entity->field_franchising) {
    $franchising = $entity->field_franchising['und'][0]['value'];
  }  
 
 $rows = array(
   array('Location', $local ),
   array('Systemwide Sales', $salesprint),
   array('% Change in Sales', $saleschange),
   array('Total U.S. Units', $total_units),
   array('Average Unit Volume', $average_unit_volume_print),
   array('% Change in Units', $units_open_percent_change),
   array('% Change in AUV', $unit_volume_percentage_cha)
  ); 
  if (isset($franchising)) {
    $rows[] = array('Franchising', $franchising);
  }
print theme('table', array(
  'header' => array(),
  'rows' => $rows,
  'attributes' => array('class' => array('table table-inline table-detail font-gotham top-100'))
));
?>

