<?php 

/**
 * Template to render Element with AJAX
 * 
 * @since 2.4
 * @author Ilya K.
 */

global $oxy_api_element;

$old_query = false;

$component_json = file_get_contents('php://input');
$options 		= json_decode( $component_json, true );

if($options['queryOptions']) {
	global $oxy_vsb_use_query, $oxygen_vsb_components;

	if($oxy_vsb_use_query) {
	    $old_query = $oxy_vsb_use_query;
	}

	$query = $oxygen_vsb_components['repeater']->setQuery($options['queryOptions']);

	$oxy_vsb_use_query = $query; //$this->query;

	if ($query->have_posts()) {
	    
	    $query->the_post();

	}

	if(class_exists('ACF') && $options['acfRepeaterFields'] && is_array($options['acfRepeaterFields'])) {

		foreach($options['acfRepeaterFields'] as $acfRepeaterField) {

			if(have_rows($acfRepeaterField) ) {
				the_row();
			}
		}
	}
}

$oxy_api_element->ajax_render_callback();

// reset query to previous state
if($old_query) {
    
    $oxy_vsb_use_query = $old_query;

    $oxy_vsb_use_query->reset_postdata();
}