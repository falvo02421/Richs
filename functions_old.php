<?php

/*
Plugin Name: Oxygen
Author: Soflyy
Author URI: https://oxygenbuilder.com
Description: If you can do it with WordPress, you can design it with Oxygen.
Version: 3.0.1
Text Domain: oxygen
*/

define("CT_VERSION", 	"3.0.1");
define("CT_FW_PATH", 	plugin_dir_path( __FILE__ )  . 	"component-framework" );
define("CT_FW_URI", 	plugin_dir_url( __FILE__ )  . 	"component-framework" );
define("CT_PLUGIN_MAIN_FILE", __FILE__ );	

global $ct_ignore_post_types;
$ct_ignore_post_types = array(
    'attachment',
    'revision',
    'nav_menu_item',
    'custom_css',
    'customize_changeset',
    'oembed_cache',
    'ct_template',
);

global $ct_component_categories;
$ct_component_categories = array(
	'Headers',
    'Heros & Titles',
    'Content',
    'Showcase',
    'Social Proof',
    'People',
    'Pricing',
    'Call To Action',
    'Contact',
    'Sliders, Tabs, & Accordions',
    'Blog',
    'Footers'
);

global $oxygen_vsb_classic_designsets; // to designate old design sets that do not use variable colors
$oxygen_vsb_classic_designsets = array(
    'atomic',
    'saas2',
    'hyperion',
    'dentist',
    'bnb',
    'winery',
    'onepage2',
    'financial',
    'freelance'
);

global $fake_properties;

$fake_properties = array( 
        'overlay-color',
        'background-position-left', 
        'background-position-top',
        'background-size-width',
        'background-size-height',
        "container-padding-top",
        "container-padding-right",
        "container-padding-bottom",
        "container-padding-left",
        "section-width",
        "custom-width",
        "header-width",
        "header-custom-width",
        "header-row-width",
        "header-row-custom-width",
        'ct-content',
        "custom-css",
        "custom-js",
        "code-css",
        "code-php",
        "code-js",
        // ct_video related
        "video-padding-bottom",
        "use-custom",
        "custom-code",
        "embed-src",
        // ct_link_button related
        "button-style",
        "button-size",
        "button-color",
        "button-text-color",

        // background related
        "gradient",
        "background",
        "overlay-color",

        // ct_icon related
        "icon-size",
        "icon-style",
        "icon-color",
        "icon-background-color",

        // oxy_dynamic_list related
        "use-acf-repeater",
        "acf-repeater",
        "background-imagedynamic",
        "srcdynamic",
        "urldynamic",

        // condition builder related
        "globalConditionsResult",
        "conditionspreview",    
        "conditionstype",
        'target',
        'icon-id',
        "gutter",
        'separator',
        'date_format',
        'size',
        'meta_key',
        'tag',
        'url',
        'src',
        'alt',
        'hover-color',
        'border-all-color',
        'border-all-style',
        'border-all-width',
        'function-name',
        'friendly-name',
        'flex-reverse',

        // new columns
        'reverse-column-order',
        'set-columns-width-50',
        'stack-columns-vertically',

        // header
        'stack-header-vertically',
        'hide-row',
        'sticky-media',
        'overlay-header-above',

        // nav menu
        'menu-id',

        // video background
        "video-background",
        "video-background-media",
        "video-background-hide",

        // shadows
        "box-shadow-horizontal-offset",
        "box-shadow-vertical-offset",
        "box-shadow-blur",
        "box-shadow-spread",
        "box-shadow-color",
        "box-shadow-inset",
        "text-shadow-horizontal-offset",
        "text-shadow-vertical-offset",
        "text-shadow-blur",
        "text-shadow-color",

        // filter
        'filter-amount-blur',
        'filter-amount-brightness',
        'filter-amount-contrast',
        'filter-amount-grayscale',
        'filter-amount-hue-rotate',
        'filter-amount-invert',
        'filter-amount-saturate',
        'filter-amount-sepia',
        'filter-amount-blur-unit',
        'filter-amount-brightness-unit',
        'filter-amount-contrast-unit',
        'filter-amount-grayscale-unit',
        'filter-amount-hue-rotate-unit',
        'filter-amount-invert-unit',
        'filter-amount-saturate-unit',
        'filter-amount-sepia-unit',

        // tabs
        'tabs-wrapper',
        'tabs-contents-wrapper',
        'active-tab-class',
        
        // pricing box
        'amount-main',
        'amount-decimal',
        'amount-currency',
        'amount-term',
        'layout',
        'sale-space-below',
        'amount-currency-typography-font-size',
        'amount-main-typography-font-size',
        'amount-main-typography-line-height',
        'amount-decimal-typography-font-size',
        'amount-term-typography-font-size',
        'sale-typography-font-size',
        'sale-typography-color',
        'pricing-box-content',
        'typography-font-size',
        'typography-color',

        // toggle
        'toggle-active-class',

        // aos
        'aos-type',
        'aos-duration',
        'aos-easing',
        'aos-offset',
        'aos-delay',
        'aos-anchor',
        'aos-anchor-placement',
        'aos-once',
    );



// default failsafe
$oxygen_vsb_default_source_sites = array(); 
$oxygen_vsb_source_sites = array();

// enabled?
$enable_default_source_sites = get_option('oxygen_vsb_enable_default_designsets'); 
$enable_3rdparty_source_sites = get_option('oxygen_vsb_enable_3rdp_designsets');

if($enable_default_source_sites == 'true') {

    $oxygen_vsb_default_source_sites = array(
        "atomic" => array('label' => 'Atomic', 'url' => "https://atomic.oxy.host", 'accesskey' =>  "", 'system' => true),
        "saas2" => array('label' => 'SAAS 2', 'url' => "https://saas2.oxy.host", 'accesskey' =>  "", 'system' => true),
        "hyperion" => array('label' => 'Hyperion', 'url' => "https://hyperion.oxy.host", 'accesskey' =>  "", 'system' => true),
        "dentist" => array('label' => 'Dentist', 'url' => "https://dentist.oxy.host", 'accesskey' =>  "", 'system' => true),
        "bnb" => array('label' => 'BnB', 'url' => "https://bnb.oxy.host", 'accesskey' =>  "", 'system' => true),
        "winery" => array('label' => 'Winery', 'url' => "https://winery.oxy.host", 'accesskey' =>  "", 'system' => true),
        "onepage2" => array('label' => 'One Page 2', 'url' => "https://onepage2.oxy.host", 'accesskey' =>  "", 'system' => true),
        "financial" => array('label' => 'Financial', 'url' => "https://financial.oxy.host", 'accesskey' =>  "", 'system' => true),
        "freelance" => array('label' => 'Freelance', 'url' => "https://freelance.oxy.host", 'accesskey' =>  "", 'system' => true),
	"marketingagencyb" => array('label' => 'Marketing Agency B', 'url' => "https://marketingagencyb.oxy.host", 'accesskey' =>  "", 'system' => true),
	"flightschool" => array('label' => 'Flight School', 'url' => "https://flightschool.oxy.host", 'accesskey' =>  "", 'system' => true),
	"conference" => array('label' => 'Conference', 'url' => "https://conference.oxy.host", 'accesskey' =>  "", 'system' => true),
	"musicteacher" => array('label' => 'Music Teacher', 'url' => "https://musicteacher.oxy.host", 'accesskey' =>  "", 'system' => true),
	"hosting" => array('label' => 'Hosting', 'url' => "https://hosting.oxy.host", 'accesskey' =>  "", 'system' => true),
	"brewery" => array('label' => 'Brewery', 'url' => "https://brewery.oxy.host", 'accesskey' =>  "", 'system' => true)
    );

}

if($enable_3rdparty_source_sites == 'true') {
    $oxygen_vsb_source_sites = get_option('oxygen_vsb_source_sites');

    if(!is_array($oxygen_vsb_source_sites)) { // fail safe
        $oxygen_vsb_source_sites = array();

        update_option('oxygen_vsb_source_sites', $oxygen_vsb_source_sites);

    }
}

global $ct_source_sites;
$ct_source_sites = array_merge($oxygen_vsb_default_source_sites, $oxygen_vsb_source_sites);

// self site
$isADesignSet= get_option('oxygen_vsb_enable_connection');
if($isADesignSet) {
    $oxygen_vsb_connection_access_key = get_option('oxygen_vsb_connection_access_key', '');
    $url = get_site_url();
    $title = get_bloginfo( 'name' );

    $selfSites = array(
        sanitize_title($title) => array('label' => $title, 'self' => true, 'url' => $url, 'accesskey' => $oxygen_vsb_connection_access_key === false ? '' : $oxygen_vsb_connection_access_key)
    );
    
    $ct_source_sites = array_merge($selfSites, $ct_source_sites);
}

require_once("component-framework/component-init.php");
function rizky_css_styles_mobile(){
    wp_register_style('my_custom_css',site_url().'/wp-content/plugins/oxygen/css/custom.css');
    wp_enqueue_style('my_custom_css');
    wp_register_style('my_slick_css',site_url(). '/wp-content/plugins/oxygen/slick/slick.css');
    wp_enqueue_style('my_slick_css');
    wp_register_style('my_slick_css_theme',site_url(). '/wp-content/plugins/oxygen/slick/slick-theme.css');
    wp_enqueue_style('my_slick_css_theme');
}
add_action('wp_enqueue_scripts','rizky_css_styles_mobile',120);
function rizky_js_styles_mobile(){
    wp_register_script('my_slick_slider',site_url(). '/wp-content/plugins/oxygen/slick/slick.js',array('jquery'),'1.8',true);
    wp_enqueue_script('my_slick_slider');
    wp_register_script('my_custom_js',site_url().'/wp-content/plugins/oxygen/js/script.js', array('jquery'),'1.8',true);
    wp_enqueue_script('my_custom_js');
}
add_action('wp_enqueue_scripts','rizky_js_styles_mobile',120);


//toolset counter
/**
 * Add loop-iteration shortcode
 * 
 * Attributes
 * 'n' (optional) : test for nth iteration
 */
add_shortcode( 'loop-iteration', function( $atts ){
  
    global $loop_n;
  

    if ( !isset( $loop_n ) ) {
        $loop_n = 1;
        $loop_ouput = '0'.$loop_n;
        return $loop_ouput; 
    }
  
    $loop_n++;
  

    if ( !isset( $atts['n'] ) ) {
        // no nth parameter, just return the current index
        if($loop_n<11){
            $loop_ouput = '0'.$loop_n;
        }else{
            $loop_ouput = $loop_n;
        }
        return $loop_ouput;
    }
    else {
        $remainder = ( $loop_n + 1 ) % $atts['n'];
        return ( $remainder == 0 );
    }
  
});


add_shortcode( 'loop-reset', function( $atts ){
    global $loop_n;

    $loop_n = 0;
});
//Eo toolset counter

function url_shortcode() {
    $x =  get_bloginfo('url');
    $x = str_replace('/id/','',$x);
    return $x;
}
add_shortcode('url','url_shortcode');



function search_generic_function() {
    //Define toolset items post type
    global $wpdb;

    $search_keyword = $_GET['search_keyword'];
    $query = ' SELECT DISTINCT post_type from wp_posts';
    $search_types = $wpdb->get_results($query);
    $is_empty = 1;
    //all show post type
    /*
    for($i=0;$i<count($search_types);$i++){
      $post_type = $search_types[$i]->post_type;
      echo '<div>'.$post_type.'</div>';     
    }
    /*
    */
    //show all post type

    //define
    $post_type_list = 'product,recipe,event,media';
    $post_type_list = explode(',',$post_type_list);
    //eo define

    //get the item
    $html           = '';
    $search_page_link = get_bloginfo('url').'/search-page';
    //add form
    $html       .= '<div class="search_page_form">';
    $html       .= '<form action="'.$search_page_link.'" method="GET">';

        $html       .= '<div class="search_form">';
        $html       .= '<input type="text" name="search_keyword" value="'.$search_keyword.'" />';
        $html       .= '</div>';

        $html       .= '<div class="search_button">';
        $html       .= '<input type="submit" value="Search" />';
        $html       .= '</div>';

    $html       .= '</form>';
    $html       .= '</div>';
    //EO addd form

    foreach($post_type_list as $pl){
        $query          = "SELECT DISTINCT post_title,post_date,post_name from wp_posts where post_type='".$pl."' and post_title !='' and post_status='publish' and post_title LIKE('%".$search_keyword."%')";
        $search_items   = $wpdb->get_results($query);
        $is_exists = count($search_items);
      //  echo $query;
        if($is_exists!=0&&$search_keyword!=""){
        $is_empty = 0;
        $html .='<div class="search_category">';

        $html .= '<div class="search_title">';
        $html .= $pl;
        $html .= '</div>';

        $html .= '<div class="search_item_list">';        
        for($x=0;$x<count($search_items);$x++){
            $post_title     = $search_items[$x]->post_title;
            $post_date      = $search_items[$x]->post_date;
            $post_date      = date('d F Y',strtotime($post_date));
            $post_name      = $search_items[$x]->post_name;
            $post_link      = get_bloginfo('url').'/'.$pl.'/'.$post_name;

            $html           .= '<div class="search_item">';

            $html           .= '<div class="search_item_title">';
            $html           .= $post_title;
            $html           .= '</div>';

            $html           .= '<div class="search_item_date">';
            $html           .= $post_date;
            $html           .= '</div>';

            $html           .= '<div class="search_item_read_more">';
            $html           .= '<a href="'.$post_link.'" target="_blank">Read More</a>';
            $html           .= '</div>';


//           $html           .= '<div class="search_item">';
//           $html           .= '</div>';

            $html           .= '</div>';

        }//for
        $html .= '</div>';
        $html .= '</div>';     
        }//is exists



    }//post type list //pl
    if($is_empty==1&&$search_keyword!=""){
        $html.='<div class="empty_search_result">';
        $html.='No matching result found';
        $html.='</div>';
    }
    //EO get item
    return $html;
    //EO Define toolset items
}
add_shortcode('search_generic','search_generic_function');


function get_current_language_id() {
   return ICL_LANGUAGE_CODE;
}
add_shortcode('get_current_language','get_current_language_id');
