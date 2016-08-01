<?php
/**
 * @file
 * enhanced_slideshow.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function enhanced_slideshow_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_anonymous_enhanced_slideshow';
  $strongarm->value = 0;
  $export['comment_anonymous_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_default_mode_enhanced_slideshow';
  $strongarm->value = 0;
  $export['comment_default_mode_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_default_per_page_enhanced_slideshow';
  $strongarm->value = '50';
  $export['comment_default_per_page_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_enhanced_slideshow';
  $strongarm->value = '1';
  $export['comment_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_form_location_enhanced_slideshow';
  $strongarm->value = 0;
  $export['comment_form_location_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_preview_enhanced_slideshow';
  $strongarm->value = '1';
  $export['comment_preview_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_subject_field_enhanced_slideshow';
  $strongarm->value = 0;
  $export['comment_subject_field_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_field_collection_item__field_enhanced_slideshow';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'thumb' => array(
        'custom_settings' => TRUE,
      ),
      'ical' => array(
        'custom_settings' => FALSE,
      ),
      'diff_standard' => array(
        'custom_settings' => FALSE,
      ),
      'token' => array(
        'custom_settings' => FALSE,
      ),
      'pager_slideshow' => array(
        'custom_settings' => FALSE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(),
      'display' => array(
        'smart_paging' => array(
          'default' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
              'smart_paging_method' => '0',
              'smart_paging_pagebreak' => '<!--pagebreak-->',
              'smart_paging_character_count' => '3072',
              'smart_paging_word_count' => '512',
              'smart_paging_title_display_suffix' => 1,
              'smart_paging_title_suffix' => ': Page ',
            ),
            'weight' => NULL,
            'visible' => FALSE,
          ),
          'full' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
              'smart_paging_method' => '0',
              'smart_paging_pagebreak' => '<!--pagebreak-->',
              'smart_paging_character_count' => '3072',
              'smart_paging_word_count' => '512',
              'smart_paging_title_display_suffix' => 1,
              'smart_paging_title_suffix' => ': Page ',
            ),
            'weight' => NULL,
            'visible' => FALSE,
          ),
          'thumb' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
              'smart_paging_method' => '0',
              'smart_paging_pagebreak' => '<!--pagebreak-->',
              'smart_paging_character_count' => '3072',
              'smart_paging_word_count' => '512',
              'smart_paging_title_display_suffix' => 1,
              'smart_paging_title_suffix' => ': Page ',
            ),
            'weight' => NULL,
            'visible' => FALSE,
          ),
        ),
      ),
    ),
  );
  $export['field_bundle_settings_field_collection_item__field_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_node__enhanced_slideshow';
  $strongarm->value = array(
    'view_modes' => array(
      'full' => array(
        'custom_settings' => TRUE,
      ),
      'teaser' => array(
        'custom_settings' => TRUE,
      ),
      'rss' => array(
        'custom_settings' => FALSE,
      ),
      'search_index' => array(
        'custom_settings' => FALSE,
      ),
      'search_result' => array(
        'custom_settings' => FALSE,
      ),
      'ical' => array(
        'custom_settings' => FALSE,
      ),
      'diff_standard' => array(
        'custom_settings' => FALSE,
      ),
      'token' => array(
        'custom_settings' => FALSE,
      ),
      'excerpt' => array(
        'custom_settings' => FALSE,
      ),
      'latest' => array(
        'custom_settings' => TRUE,
      ),
      'latest_big_image' => array(
        'custom_settings' => FALSE,
      ),
      'rss_alternate' => array(
        'custom_settings' => FALSE,
      ),
      'search_teaser' => array(
        'custom_settings' => FALSE,
      ),
      'section' => array(
        'custom_settings' => FALSE,
      ),
      'teaser_alternative' => array(
        'custom_settings' => FALSE,
      ),
      'related' => array(
        'custom_settings' => FALSE,
      ),
      'advanced_teaser' => array(
        'custom_settings' => TRUE,
      ),
      'media' => array(
        'custom_settings' => FALSE,
      ),
      'dashboard' => array(
        'custom_settings' => FALSE,
      ),
      'revision' => array(
        'custom_settings' => FALSE,
      ),
      'recommended_by_fsd' => array(
        'custom_settings' => TRUE,
      ),
      'featured_article' => array(
        'custom_settings' => FALSE,
      ),
      'resources' => array(
        'custom_settings' => FALSE,
      ),
      'teaser_alternate' => array(
        'custom_settings' => FALSE,
      ),
      'video_display' => array(
        'custom_settings' => FALSE,
      ),
      'll_intro' => array(
        'custom_settings' => FALSE,
      ),
      'll_onecol' => array(
        'custom_settings' => FALSE,
      ),
      'll_opening' => array(
        'custom_settings' => FALSE,
      ),
      'll_twocol' => array(
        'custom_settings' => FALSE,
      ),
      'most_recent_home' => array(
        'custom_settings' => TRUE,
      ),
      'recipedia_featured' => array(
        'custom_settings' => FALSE,
      ),
    ),
    'extra_fields' => array(
      'form' => array(
        'metatags' => array(
          'weight' => '40',
        ),
        'title' => array(
          'weight' => '-5',
        ),
        'path' => array(
          'weight' => '30',
        ),
        'redirect' => array(
          'weight' => '30',
        ),
        'xmlsitemap' => array(
          'weight' => '30',
        ),
      ),
      'display' => array(
        'smart_paging' => array(
          'default' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
              'smart_paging_method' => '0',
              'smart_paging_pagebreak' => '<!--pagebreak-->',
              'smart_paging_character_count' => '3072',
              'smart_paging_word_count' => '512',
              'smart_paging_title_display_suffix' => 1,
              'smart_paging_title_suffix' => ': Page ',
            ),
            'weight' => '10',
            'visible' => TRUE,
          ),
          'full' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
            'weight' => '53',
            'visible' => FALSE,
          ),
          'teaser' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
            'weight' => '49',
            'visible' => FALSE,
          ),
          'latest' => array(
            'weight' => '10',
            'visible' => TRUE,
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
          ),
          'advanced_teaser' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
            'weight' => '49',
            'visible' => FALSE,
          ),
          'recommended_by_fsd' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
            'weight' => '50',
            'visible' => FALSE,
          ),
          'most_recent_home' => array(
            'settings' => array(
              'smart_paging_settings_context' => 'content_type',
            ),
            'weight' => '49',
            'visible' => FALSE,
          ),
        ),
      ),
    ),
  );
  $export['field_bundle_settings_node__enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_enhanced_slideshow';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_enhanced_slideshow';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_enhanced_slideshow';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_enhanced_slideshow';
  $strongarm->value = '1';
  $export['node_preview_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_enhanced_slideshow';
  $strongarm->value = 0;
  $export['node_submitted_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'pathauto_node_enhanced_slideshow_pattern';
  $strongarm->value = '[node:term_hierarchy-top]/[node:term_hierarchy-bottom]/articles/[node:title]';
  $export['pathauto_node_enhanced_slideshow_pattern'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'scheduler_publish_enable_enhanced_slideshow';
  $strongarm->value = 1;
  $export['scheduler_publish_enable_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'scheduler_publish_past_date_enhanced_slideshow';
  $strongarm->value = 'error';
  $export['scheduler_publish_past_date_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'scheduler_publish_revision_enhanced_slideshow';
  $strongarm->value = 0;
  $export['scheduler_publish_revision_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'scheduler_publish_touch_enhanced_slideshow';
  $strongarm->value = 1;
  $export['scheduler_publish_touch_enhanced_slideshow'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'xmlsitemap_settings_node_enhanced_slideshow';
  $strongarm->value = array(
    'status' => '1',
    'priority' => '0.5',
  );
  $export['xmlsitemap_settings_node_enhanced_slideshow'] = $strongarm;

  return $export;
}
