<?php
/*
 *  Send Recipe Terms to Recipe Search
 */
function rbo_preprocess_field(&$vars) {
  $recipeFields = array('field_recipe_main_ingredient', 'field_recipe_day_part', 'field_recipe_menu_part', 'field_recipe_cuisine_type');
  if (in_array($vars['element']['#field_name'], $recipeFields)) {
    $total = count($vars['items']);
    for ($i=0; $i < $total; $i++) {
      if (isset($vars['items'][$i]['#href'])) {
        $type = $vars['element']['#title'];
        $type = preg_replace('/[\s_]/', '-', $type);
        $type = strtolower($type);
        $tid = str_replace('taxonomy/term/', '', $vars['items'][$i]['#href']);
        $url = "menu/recipe/search";
        $vars['items'][$i]['#href'] = $url;
        $vars['items'][$i]['#options'] = array('query' => array($type => $tid));
      }
    }
  }
}