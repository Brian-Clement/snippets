<?php
/**
 * @file
 * enhanced_slideshow.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function enhanced_slideshow_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'enhanced_slideshow';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Enhanced Slideshow';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '0';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['pager']['options']['id'] = '0';
  $handler->display->display_options['pager']['options']['quantity'] = '9';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* Field: Content: Enhanced Slideshow */
  $handler->display->display_options['fields']['field_enhanced_slideshow']['id'] = 'field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['table'] = 'field_data_field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['field'] = 'field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['label'] = '';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_enhanced_slideshow']['settings'] = array(
    'edit' => '',
    'delete' => '',
    'add' => '',
    'description' => 1,
    'view_mode' => 'full',
  );
  $handler->display->display_options['fields']['field_enhanced_slideshow']['group_rows'] = FALSE;
  $handler->display->display_options['fields']['field_enhanced_slideshow']['delta_offset'] = '0';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Nid */
  $handler->display->display_options['arguments']['nid']['id'] = 'nid';
  $handler->display->display_options['arguments']['nid']['table'] = 'node';
  $handler->display->display_options['arguments']['nid']['field'] = 'nid';
  $handler->display->display_options['arguments']['nid']['default_action'] = 'default';
  $handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
  $handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'enhanced_slideshow' => 'enhanced_slideshow',
  );

  /* Display: Enhanced Slideshow */
  $handler = $view->new_display('block', 'Enhanced Slideshow', 'block');
  $handler->display->display_options['defaults']['footer'] = FALSE;
  /* Footer: Global: View (Views field view) */
  $handler->display->display_options['footer']['view_field']['id'] = 'view_field';
  $handler->display->display_options['footer']['view_field']['table'] = 'views';
  $handler->display->display_options['footer']['view_field']['field'] = 'view_field';
  $handler->display->display_options['footer']['view_field']['label'] = '';
  $handler->display->display_options['footer']['view_field']['element_label_colon'] = FALSE;
  $handler->display->display_options['footer']['view_field']['view'] = 'enhanced_slideshow';
  $handler->display->display_options['footer']['view_field']['display'] = 'block_1';
  $handler->display->display_options['block_description'] = 'Enhanced Slideshow';

  /* Display: Enhanced Slideshow pager */
  $handler = $view->new_display('block', 'Enhanced Slideshow pager', 'block_1');
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Enhanced Slideshow (field_enhanced_slideshow:delta) */
  $handler->display->display_options['fields']['delta']['id'] = 'delta';
  $handler->display->display_options['fields']['delta']['table'] = 'field_data_field_enhanced_slideshow';
  $handler->display->display_options['fields']['delta']['field'] = 'delta';
  $handler->display->display_options['fields']['delta']['label'] = '';
  $handler->display->display_options['fields']['delta']['exclude'] = TRUE;
  $handler->display->display_options['fields']['delta']['element_label_colon'] = FALSE;
  /* Field: Content: Enhanced Slideshow */
  $handler->display->display_options['fields']['field_enhanced_slideshow']['id'] = 'field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['table'] = 'field_data_field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['field'] = 'field_enhanced_slideshow';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['label'] = '';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_enhanced_slideshow']['alter']['text'] = '<div class="cycle-pager-item"><a href="#page=[delta]">[field_enhanced_slideshow]</a></div>';
  $handler->display->display_options['fields']['field_enhanced_slideshow']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_enhanced_slideshow']['settings'] = array(
    'edit' => '',
    'delete' => '',
    'add' => '',
    'description' => 1,
    'view_mode' => 'thumb',
  );
  $handler->display->display_options['fields']['field_enhanced_slideshow']['group_rows'] = FALSE;
  $handler->display->display_options['fields']['field_enhanced_slideshow']['delta_offset'] = '0';
  $export['enhanced_slideshow'] = $view;

  return $export;
}
