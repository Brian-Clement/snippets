<?php
/*
 * VERSION 1
 */
// From clean_plate_awards.module -- THIS WORKS EVERYWHERE EXCEPT FOR THE HOMARO CANTU'S PICKS NODE

function clean_plate_awards_get_prev_next_nodes($current_node) {
  global $base_url;
  $nid = $current_node->nid;
  $node = node_load($nid);
  $year = $node->field_year['und'][0]['value'];
  // Previous node is not valid
  if (empty($current_node)) {
    return;
  }
  $items = array();
  // get the next $currrent_position + 1
  $query = db_select('node', 'n');
  $query->join('field_data_field_year', 'y', 'y.entity_id = n.nid');
  $query->condition('n.type', $current_node->type);
  $query->condition('y.field_year_value', $year, '=');
  $query->condition('n.status', 1);
  $query->condition('n.nid', $current_node->nid, '>');
  $query->fields('n', array('nid'))
  ->orderBy('n.created', 'ASC')
  ->range(0, 1);
  $result = $query->execute();
  $next_nid = $result->fetchField();
  if($next_nid){
    $items['items'][] = l('Next', 'node/' . $next_nid,
      array('attributes' => array('class' => 'series-next')));
  }

  // get the prev position $currrent_position - 1
  $query = db_select('node', 'n');
  $query->join('field_data_field_year', 'y', 'y.entity_id = n.nid');
  $query->condition('n.type', $current_node->type);
  $query->condition('y.field_year_value', $year, '=');
  $query->condition('n.status', 1);
  $query->condition('n.nid', $current_node->nid, '<');
  $query->fields('n', array('nid'))
  ->orderBy('n.created', 'DESC')
  ->range(0, 1);
  $result = $query->execute();
  $prev_nid = $result->fetchField();
  if($prev_nid){
    $items['items'][] = l('Prev', 'node/' . $prev_nid,
    array('attributes' => array('class' => 'series-previous')));
  }
  return theme('item_list', $items);
}


/*
 * VERSION 2
 */
// From clean_plate_awards.module -- THIS WORKS EVERYWHERE EXCEPT FOR THE HOMARO CANTU'S PICKS NODE
function clean_plate_awards_get_prev_next_nodes($current_node) {
  global $base_url;
  $nid = $current_node->nid;
  $node = node_load($nid);
  $year = $node->field_year['und'][0]['value'];
  // Previous node is not valid
  if (empty($current_node)) {
    return;
  }
  $items = array();
  // get the next $currrent_position + 1
  $sql = "SELECT node.nid AS nid, node.title AS node_title, node.created AS node_created, 'node' AS field_data_field_op_main_image_node_entity_type, 'node' AS field_data_field_article_summary_node_entity_type
    FROM 
    {node} node
    LEFT JOIN {field_data_field_year} field_data_field_year ON node.nid = field_data_field_year.entity_id AND (field_data_field_year.entity_type = 'node' AND field_data_field_year.deleted = '0')
    WHERE (( (node.status = '1') AND (node.nid > $nid) AND (node.type IN  ('clean_plate_awards')) AND (DATE_FORMAT(field_data_field_year.field_year_value, '%Y') = '2014') ))
    ORDER BY node_created ASC";
  $next_nid = db_query($sql)->fetchField();
  if($next_nid){
    $items['items'][] = l('Next', 'node/' . $next_nid,
      array('attributes' => array('class' => 'series-next')));
  }

  // get the prev position $currrent_position - 1
  $sql = "SELECT node.nid AS nid, node.title AS node_title, node.created AS node_created, 'node' AS field_data_field_op_main_image_node_entity_type, 'node' AS field_data_field_article_summary_node_entity_type
    FROM 
    {node} node
    LEFT JOIN {field_data_field_year} field_data_field_year ON node.nid = field_data_field_year.entity_id AND (field_data_field_year.entity_type = 'node' AND field_data_field_year.deleted = '0')
    WHERE (( (node.status = '1') AND (node.nid < $nid) AND (node.type IN  ('clean_plate_awards')) AND (DATE_FORMAT(field_data_field_year.field_year_value, '%Y') = '2014') ))
    ORDER BY node_created DESC";
  $prev_nid = db_query($sql)->fetchField();
  if($prev_nid){
    $items['items'][] = l('Prev', 'node/' . $prev_nid,
    array('attributes' => array('class' => 'series-previous')));
  }
  return theme('item_list', $items);

}

/*
 * VERSION 3
 */
// From clean_plate_awards.module -- THIS WORKS EVERYWHERE EXCEPT FOR THE HOMARO CANTU'S PICKS NODE
function clean_plate_awards_get_prev_next_nodes($current_node) {
  global $base_url;
  $nid = $current_node->nid;
  $node = node_load($nid);
  $year = $node->field_year['und'][0]['value'];
  // Previous node is not valid
  if (empty($current_node)) {
    return;
  }
  $items = array();
  // get the next $currrent_position + 1
  $sql = "SELECT node.nid AS nid, node.title AS node_title, node.created AS node_created, 'node' AS field_data_field_op_main_image_node_entity_type, 'node' AS field_data_field_article_summary_node_entity_type
    FROM 
    {node} node
    LEFT JOIN {field_data_field_year} field_data_field_year ON node.nid = field_data_field_year.entity_id AND (field_data_field_year.entity_type = 'node' AND field_data_field_year.deleted = '0')
    WHERE (( (node.status = '1') AND (node.created > $node->created) AND (node.type IN  ('clean_plate_awards')) AND (DATE_FORMAT(field_data_field_year.field_year_value, '%Y') = '2014') ))
    ORDER BY node_created ASC";
  $next_nid = db_query($sql)->fetchField();
  if($next_nid){
    $items['items'][] = l('Next', 'node/' . $next_nid,
      array('attributes' => array('class' => 'series-next')));
  }

  // get the prev position $currrent_position - 1
  $sql = "SELECT node.nid AS nid, node.title AS node_title, node.created AS node_created, 'node' AS field_data_field_op_main_image_node_entity_type, 'node' AS field_data_field_article_summary_node_entity_type
    FROM 
    {node} node
    LEFT JOIN {field_data_field_year} field_data_field_year ON node.nid = field_data_field_year.entity_id AND (field_data_field_year.entity_type = 'node' AND field_data_field_year.deleted = '0')
    WHERE (( (node.status = '1') AND (node.created < $node->created) AND (node.type IN  ('clean_plate_awards')) AND (DATE_FORMAT(field_data_field_year.field_year_value, '%Y') = '2014') ))
    ORDER BY node_created DESC";
  $prev_nid = db_query($sql)->fetchField();
  if($prev_nid){
    $items['items'][] = l('Prev', 'node/' . $prev_nid,
    array('attributes' => array('class' => 'series-previous')));
  }
  return theme('item_list', $items);

}