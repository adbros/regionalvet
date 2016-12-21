<?php 
/**
 * Plugin Name: PluginlySpeaking FloatingDiv
 * Plugin URI: http://pluginlyspeaking.com/plugins/floating-div/
 * Description: Create a simple div, floating up and down when the user is scrolling
 * Author: PluginlySpeaking
 * Version: 1.3
 * Author URI: http://www.pluginlyspeaking.com
 * License: GPL2
 */

require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'floating_div_register_required_plugins' );

function floating_div_register_required_plugins() {

	$plugins = array(
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => true,
		),
	);

	$config = array(
		'id'           => 'floating-div',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => 'Without CMB2, FloatingDiv won\'t work.',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

function add_cmb2_ps() {
	if ( is_plugin_active( WP_PLUGIN_DIR . '/cmb2/init.php' ) ) {
		require_once WP_PLUGIN_DIR . '/cmb2/init.php';
	}
}

add_action( 'admin_init', 'add_cmb2_ps' );

// Check for the PRO version
add_action( 'admin_init', 'psfd_free_pro_check' );
function psfd_free_pro_check() {
    if (is_plugin_active('pluginlyspeaking-floatingdiv-pro/pluginlyspeaking-floatingdiv-pro.php')) {

        function my_admin_notice(){
        echo '<div class="updated">
                <p><strong>PRO</strong> version is activated.</p>
              </div>';
        }
        add_action('admin_notices', 'my_admin_notice');

        deactivate_plugins(__FILE__);
    }
}

add_action( 'wp_enqueue_scripts', 'add_floating_div_script' );

function add_floating_div_script() {
	wp_enqueue_style( 'floatingdivcss', plugins_url('css/ps_exp_floating_div.css', __FILE__));
	wp_enqueue_script("jquery");
}

// Enqueue admin styles
add_action( 'admin_enqueue_scripts', 'add_floating_div_admin_style' );
function add_floating_div_admin_style() { wp_enqueue_style( 'adm_floating_div', plugins_url('css/ps_admin_de_style.css', __FILE__)); }

function create_floating_div_type() {
  register_post_type( 'floating_div_ps',
    array(
      'labels' => array(
        'name' => 'Floating Div',
        'singular_name' => 'Floating Div'
      ),
      'public' => true,
      'has_archive' => false,
      'hierarchical' => false,
      'supports'           => array( 'title' ),
      'menu_icon'    => 'dashicons-plus',
    )
  );
}

add_action( 'init', 'create_floating_div_type' );


function floating_div_admin_css() {
    global $post_type;
    $post_types = array( 
                        'floating_div_ps',
                  );
    if(in_array($post_type, $post_types))
    echo '<style type="text/css">#edit-slug-box, #post-preview, #view-post-btn{display: none;} div[class*="-disabled-"] .cmb2-metabox-description {color: #00b783;background-image: url(\''.plugins_url('img/disabled.png', __FILE__).'\');background-repeat: no-repeat;padding-left: 30px;display: block;}</style>';
}

function remove_view_link_floating_div( $action ) {

    unset ($action['view']);
    return $action;
}

add_filter( 'post_row_actions', 'remove_view_link_floating_div' );
add_action( 'admin_head-post-new.php', 'floating_div_admin_css' );
add_action( 'admin_head-post.php', 'floating_div_admin_css' );


function floating_div_metabox() {
	$prefix = '_floating_div_';
	
	$cmb_group = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => __( 'Floating Div', 'floating_div_ps' ),
		'object_types' => array( 'floating_div_ps' ),
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Div Content',
		'desc' => 'Write the content of the div',
		'id' => $prefix . 'content',
		'type' => 'wysiwyg'
	) );
	
	$cmb_group->add_field( array(
		'name'             => 'Collapsible',
		'desc' => 'Available in the PRO Version',
		'id'               => 'disabled_1',
		'type'             => 'select',
		'show_option_none' => false,
		'default'          => 'no',
		'options'          => array(
			'no' => __( 'No', 'cmb2' ),
		),
		'attributes'  => array(
			'readonly' => 'readonly',
			'disabled' => 'disabled',
		),
	) );
	
	$cmb_group->add_field( array(
		'name'             => 'Div Width',
		'desc' => 'Available in the PRO Version',
		'id'               => 'disabled_2',
		'type'             => 'select',
		'show_option_none' => false,
		'default'          => '260px',
		'options'          => array(
			'260px'   => __( 'Medium', 'cmb2' ),
		),
		'attributes'  => array(
			'readonly' => 'readonly',
			'disabled' => 'disabled',
		),
	) );
	
	$cmb_group->add_field( array(
		'name'             => 'Rounded Corners',
		'id'               => $prefix . 'corners',
		'type'             => 'select',
		'show_option_none' => false,
		'default'          => '0px',
		'options'          => array(
			'0px' => __( 'No', 'cmb2' ),
			'25px'   => __( 'Yes', 'cmb2' ),
		),
	) );
	
	$cmb_group->add_field( array(
		'name'             => 'Div Position',
		'desc' => 'Available in the PRO Version',
		'id'               => 'disabled_3',
		'type'             => 'select',
		'show_option_none' => false,
		'default'          => 'top_right',
		'options'          => array(
			'top_right' => __( 'Top Right', 'cmb2' ),
		),
		'attributes'  => array(
			'readonly' => 'readonly',
			'disabled' => 'disabled',
		),
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Margin Top',
		'desc' => '(in px) ex : 10 for 10px',
		'id' => $prefix . 'margin_top',
		'default' => '10',
		'type' => 'text',
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Margin Right',
		'desc' => '(in px) ex : 10 for 10px',
		'id' => $prefix . 'margin_right',
		'default' => '10',
		'type' => 'text',
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Border Color',
		'id' => $prefix . 'border_color',
		'type'    => 'colorpicker',
		'default' => '#000000',
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Background Color',
		'id' => $prefix . 'background_color',
		'type'    => 'colorpicker',
		'default' => '#ffffff',
	) );
	
	$cmb_group->add_field( array(
		'name' => 'Image Background',
		'desc' => 'Available in the PRO Version',
		'id'   => 'disabled_4',
		'type' => 'file',
		'options' => array(
			'url' => false
		),
		'attributes'  => array(
			'readonly' => 'readonly',
			'disabled' => 'disabled',
		),
	) );
	
	// PRO version
    $pro_group = new_cmb2_box( array(
        'id' => $prefix . 'pro_mb',
        'title' => '<span style="font-weight:400;">Upgrade to <strong>PRO version</strong></span>',
        'object_types' => array( 'floating_div_ps' ),
       'context' => 'side',
        'priority' => 'low',
        'row_classes' => 'de_hundred de_heading',
    ));
	
	$pro_group->add_field( array(
		'name' => '',
			'desc' => '<div><span class="dashicons dashicons-yes"></span> Collapsible option<br/><span class="dashicons dashicons-yes"></span> Container location<br/><span class="dashicons dashicons-yes"></span> Container size<br/><span class="dashicons dashicons-yes"></span> Easy styling<br/><span class="dashicons dashicons-arrow-right"></span> And more...<br/><br/><a style="display:inline-block; background:#33b690; padding:8px 25px 8px; border-bottom:3px solid #33a583; border-radius:3px; color:white;" target="_blank" href="http://pluginlyspeaking.com/plugins/floating-div/">See all PRO features</a><br/><span style="display:block;margin-top:14px; font-size:13px; color:#0073AA; line-height:20px;"><span class="dashicons dashicons-tickets"></span> Code <strong>FD10OFF</strong> (10% OFF)</span></div>',
			'id'   => $prefix . 'pro_desc',
			'type' => 'title',
			'row_classes' => 'de_hundred de_info de_info_side',
	));
}

add_action( 'cmb2_init', 'floating_div_metabox' );

add_action( 'manage_floating_div_ps_posts_custom_column' , 'floating_div_custom_columns', 10, 2 );

function floating_div_custom_columns( $column, $post_id ) {
    switch ( $column ) {
	case 'shortcode' :
		global $post;
		$pre_slug = '' ;
		$pre_slug = $post->post_title;
		$slug = sanitize_title($pre_slug);
    	$shortcode = '<span style="border: solid 3px lightgray; background:white; padding:7px; font-size:17px; line-height:40px;">[floating_div_ps name="'.$slug.'"]</strong>';
	    echo $shortcode; 
	    break;
    }
}

function add_floating_div_columns($columns) {
    return array_merge($columns, 
              array('shortcode' => __('Shortcode'),
                    ));
}
add_filter('manage_floating_div_ps_posts_columns' , 'add_floating_div_columns');

function ps_get_wysiwyg_output( $meta_key, $post_id = 0 ) {
    global $wp_embed;

    $post_id = $post_id ? $post_id : get_the_id();

    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );

    return $content;
}

function floating_div_shortcode($atts) {
	extract(shortcode_atts(array(
		"name" => ''
	), $atts));
		
	global $post;
    $args = array('post_type' => 'floating_div_ps', 'numberposts'=>-1);
    $custom_posts = get_posts($args);
	$output = '';
	foreach($custom_posts as $post) : setup_postdata($post);
	$sanitize_title = sanitize_title($post->post_title);
	if ($sanitize_title == $name)
	{
	$prefix = '_floating_div_';
    $div_content = get_post_meta( get_the_id(), $prefix . 'content', true );
	$div_corners = get_post_meta( get_the_id(), $prefix . 'corners', true );
	$div_margin_top = get_post_meta( get_the_id(), $prefix . 'margin_top', true );
	$div_margin_right = get_post_meta( get_the_id(), $prefix . 'margin_right', true );
	$div_border_color = get_post_meta( get_the_id(), $prefix . 'border_color', true );
	$div_background_color = get_post_meta( get_the_id(), $prefix . 'background_color', true );
	$background = 'background:'.$div_background_color.'';
		
	$postid = get_the_ID();
	
	$css_position = '';
	$css_position .= 'right:'.$div_margin_right.'px;';   
	$css_position .= 'top:'.$div_margin_top.'px;';  
	
	$output = '';

	$output .= '<div id="floatdiv_'.$postid.'" class="exp_floatdiv_content_pro" style="'.$css_position.';width:260px;border:2px solid '.$div_border_color.';border-radius:'.esc_attr( $div_corners).';'.$background.';">';
	$output .= ''. ps_get_wysiwyg_output( $prefix . 'content', get_the_ID() )  .'';
	$output .= '</div>';
	}
	endforeach; wp_reset_query();
	return $output;	
}
add_shortcode( 'floating_div_ps', 'floating_div_shortcode' );


	
?>