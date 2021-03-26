<?php 

/**
 * Get Easy Posts instance and return rendered HTML
 * Editing something here also edit it in ajax.php!
 * 
 * @since 2.0
 * @author Ilya K.
 */

oxygen_vsb_ajax_request_header_check();

header('Content-Type: application/json');

$component_json = file_get_contents('php://input');
$component 		= json_decode( $component_json, true );
$options 		= $component['options']['original'];
$models =  $component['models'];

$parentQuery = $component['queryOptions'];
$acfRepeaterFields = $component['acfRepeaterFields'];
global $oxygen_vsb_components;
$response = $oxygen_vsb_components['repeater']->parse_shortcodes_map($models, $options, $parentQuery, $acfRepeaterFields);

echo json_encode($response);

die();