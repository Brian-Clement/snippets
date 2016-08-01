<?php
/**
 * @file
 * Administration page callbacks for the gated content module.
 */

/**
 * Form builder. Configure gated content.
 *
 * @ingroup forms
 * @see system_settings_form().
 */

function gated_content_admin_settings() {
	// Get an array of node types with internal names as keys and "friendly names" as values. E.g.,
	// array('page' => ’Basic Page, 'article' => 'Articles')
	$types = node_type_get_types();
	foreach($types as $node_type) {
		$options[$node_type->type] = $node_type->name;
	}

	$form['gated_content_node_types'] = array(
		'#type' => 'checkboxes',
		'#title' => t('Enable gated content on the following content types'),
		'#options' => $options,
		'#default_value' => variable_get('gated_content_node_types', array('page')),
		'#description' => t('A select field will be available on these content types to	restrict their availability, as well as a gated content teaser field for the alternate display.'),
	);

	$form['gated_content_cookie'] = array(
		'#type' => 'textfield',
		'#title' => t('Cookie'),
		'#description' => t('If your gated content will also check for the presence of a cookie, enter its name here. Replace periods with underscores in your cookie name for PHP compliance.'),
		'#default_value' => variable_get('gated_content_cookie', array('com_silverpop_iMAWebCookie')),
		'#size' => 60,
	);

	$defaults = array(
		'value' => '',
		'format' => 'full_html',
	);
	$gated_content_cta = variable_get('gated_content_cta', $defaults);
	$form['gated_content_cta'] = array(
		'#type' => 'text_format',
		'#title' => t('Call to Action'),
		'#description' => t('Enter your call to action to send users to your registration form.'),
		'#default_value' => $gated_content_cta['value'],
    '#format' => $gated_content_cta['format'],
	);

	$form['#submit'][] = 'gated_content_admin_settings_submit';
	
	return system_settings_form($form);
}

/**
 * Process gated content settings submission.
 */
function gated_content_admin_settings_submit($form, $form_state) {
	// Loop through each of the content type checkboxes shown on the form.
	foreach ($form_state['values']['gated_content_node_types'] as $key => $value) {
		// If the check box for a content type is unchecked, look to see whether
		// this content type has the gated content field attached to it using the
		// field_info_instance function. If it does then we need to remove the
		// gated content field as the administrator has unchecked the box.
		if (!$value) {
			$fields = array('gated_content', 'gated_content_teaser');
			foreach ($fields as $field) {
				$instance = field_info_instance('node', $field, $key);
				if (!empty($instance)) {
					field_delete_instance($instance);
					watchdog('Gated Content', 'Deleted field ' . $field . ' from content type:	%key', array('%key' => $key));
				}
			}
		} else {
			// If the check box for a content type is checked, look to see whether
			// the field is associated with that content type. If not then add the
			// gated content field to the content type.
			$instance = field_info_instance('node', 'gated_content', $key);
			if (empty($instance)) {
				$instance = array(
					'field_name' => 'gated_content',
					'entity_type' => 'node',
					'bundle' => $key,
					'label' => t('Gated Content'),
					'widget' => array(
						'type' => 'options_onoff',
						'settings' => array(
							'display_label' => TRUE,
						),
					),
					'display' => array(
						'default' => array(
							'label' => 'hidden',
							'type' => 'hidden',
						),
					),
				);
				$instance = field_create_instance($instance);
				watchdog('Gated Content', 'Added gated content field to content type: %key',
				array('%key' => $key));
			}
			$instance2 = field_info_instance('node', 'gated_content_teaser', $key);
			if (empty($instance2)) {
				$instance2 = array(
					'field_name' => 'gated_content_teaser',
					'entity_type' => 'node',
					'bundle' => $key,
					'label' => t('Gated Content Teaser'),
					'description' => t('Enter the teaser content for users who see the gated display.'),
					'widget' => array('type' => 'text_textarea'),
					'settings' => array('text_processing' => '1'),
				);
				$instance2 = field_create_instance($instance2);
				watchdog('Gated Content', 'Added gated content teaser field to content type: %key',
				array('%key' => $key));
			}
		}
	} // End foreach loop.
}