<?php 
/**
 * Plugin Name: PluginlySpeaking FloatingDiv
 * Plugin URI: http://pluginlyspeaking.com/plugins/floating-div/
 * Description: Create a simple div, floating up and down when the user is scrolling
 * Author: PluginlySpeaking
 * Version: 2.0
 * Author URI: http://www.pluginlyspeaking.com
 * License: GPL2
 */

// Check for the PRO version
add_action( 'admin_init', 'psfd_free_pro_check' );
function psfd_free_pro_check() {
    if (is_plugin_active('pluginlyspeaking-floatingdiv-pro/pluginlyspeaking-floatingdiv-pro.php')) {

        function my_admin_notice(){
        echo '<div class="updated">
                <p>Floating Div <strong>PRO</strong> version is activated.</p>
				<p>Floating Div <strong>FREE</strong> version is desactivated.</p>
              </div>';
        }
        add_action('admin_notices', 'my_admin_notice');

        deactivate_plugins(__FILE__);
    }
}

 add_action( 'wp_enqueue_scripts', 'psfd_add_script' );

function psfd_add_script() {
	wp_enqueue_style( 'psfd_css', plugins_url('css/psfd.css', __FILE__));
	wp_enqueue_script('jquery');	
}

// Enqueue admin styles
add_action( 'admin_enqueue_scripts', 'psfd_add_admin_style' );
function psfd_add_admin_style() {
	wp_enqueue_style( 'psfd_admin_css', plugins_url('css/psfd_admin.css', __FILE__));
}

function psfd_create_type() {
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

add_action( 'init', 'psfd_create_type' );


function psfd_admin_css() {
    global $post_type;
    $post_types = array( 
                        'floating_div_ps',
                  );
    if(in_array($post_type, $post_types))
    echo '<style type="text/css">#edit-slug-box, #post-preview, #view-post-btn{display: none;}</style>';
}

function psfd_remove_view_link( $action ) {

    unset ($action['view']);
    return $action;
}

add_filter( 'post_row_actions', 'psfd_remove_view_link' );
add_action( 'admin_head-post-new.php', 'psfd_admin_css' );
add_action( 'admin_head-post.php', 'psfd_admin_css' );

function psfd_check($cible,$test){
  if($test == $cible){return ' checked="checked" ';}
}

add_action('add_meta_boxes','psfd_init_settings_metabox');

function psfd_init_settings_metabox(){
  add_meta_box('psfd_settings_metabox', 'Settings', 'psfd_add_settings_metabox', 'floating_div_ps', 'side', 'high');
}

function psfd_add_settings_metabox($post){
	
	$prefix = '_floating_div_';
	$width = get_post_meta($post->ID, $prefix.'width',true);
	if ($width == "")
		$width = "260px";
	?>
	<table class="pspt_table">
		<tr>
			<td colspan="2"><label for="width">Width of content : </label>
				<select name="width" class="psfd_select_100">
					<option <?php selected( $width, "160px"); ?> id="psfd_collapsible_yes" value="160px">Tiny</option>
					<option <?php selected( $width, "210px");  ?> id="psfd_collapsible_no" value="210px">Small</option>
					<option <?php selected( $width, "260px"); ?> id="psfd_collapsible_yes" value="260px">Medium</option>
					<option <?php selected( $width, "310px");  ?> id="psfd_collapsible_no" value="310px">Large</option>
					<option <?php selected( $width, "360px");  ?> id="psfd_collapsible_no" value="360px">Huge</option>
				</select>
			</td>
		</tr>
	</table>
	
	<?php 
	
}

add_action('add_meta_boxes','psfd_init_advert_metabox');

function psfd_init_advert_metabox(){
  add_meta_box('psfd_advert_metabox', 'Upgrade to PRO Version', 'psfd_add_advert_metabox', 'floating_div_ps', 'side', 'low');
}

function psfd_add_advert_metabox($post){	
	?>
	
	<ul style="list-style-type:disc;padding-left:20px;">
		<li>Get a collapsible content</li>
		<li>Container location</li>
		<li>Use your theme's font</li>
		<li>Device restriction</li>
		<li>User restriction</li>
		<li>And more...</li>
	</ul>
	<a style="text-decoration: none;display:inline-block; background:#33b690; padding:8px 25px 8px; border-bottom:3px solid #33a583; border-radius:3px; color:white;" target="_blank" href="http://pluginlyspeaking.com/plugins/floating-div/">See all PRO features</a>
	<span style="display:block;margin-top:14px; font-size:13px; color:#0073AA; line-height:20px;">
		<span class="dashicons dashicons-tickets"></span> Code <strong>FD10OFF</strong> (10% OFF)
	</span>
	<?php 
	
}


add_action('add_meta_boxes','psfd_init_content_metabox');

function psfd_init_content_metabox(){
  add_meta_box('psfd_content_metabox', 'Build your Floating Div', 'psfd_add_content_metabox', 'floating_div_ps', 'normal');
}

function psfd_add_content_metabox($post){
	$prefix = '_floating_div_';

	$content = get_post_meta($post->ID, $prefix.'content',true);
	$position = get_post_meta($post->ID, $prefix.'position',true);
	$margin_top = get_post_meta($post->ID, $prefix.'margin_top',true);
	$margin_bottom = get_post_meta($post->ID, $prefix.'margin_bottom',true);
	$margin_right = get_post_meta($post->ID, $prefix.'margin_right',true);
	$borders = get_post_meta($post->ID, $prefix.'borders',true);	
	$border_color = get_post_meta($post->ID, $prefix.'border_color',true);	
	$corners = get_post_meta($post->ID, $prefix.'corners',true);
	$background = get_post_meta($post->ID, $prefix.'background',true);
	$background_color = get_post_meta($post->ID, $prefix.'background_color',true);
	$image = get_post_meta($post->ID, $prefix.'image',true);
	
	$settings = array( 'textarea_name' => 'content' );	
	wp_editor( htmlspecialchars_decode($content), 'psfd_content', $settings);
	
	?>
	
	<h2 class="psfd_admin_title">Position</h2>
	
		<table class="psfd_table_100">
			<tr>
				<td>
					<label for="position">Choose your content position : </label>
					
					<select name="position" class="psfd_select_150p">
						<option <?php selected( $position, "top_right"); ?> id="psfd_position_top_right" value="top_right">Top Right</option>
						<option <?php selected( $position, "bottom_right");  ?> id="psfd_position_bottom_right" value="bottom_right">Bottom Right</option>
					</select>
				</td>
				<td>
					<div id="psfd_div_margin_top" class="psfd_div_margins">
						<label for="margin_top" class="psfd_label_margins" >Margin Top : </label>
						<input type="text" id="psfd_margin_top" name="margin_top" placeholder="(in px) ex : 10 for 10px" value="<?php echo $margin_top; ?>" />
					</div>
					<div id="psfd_div_margin_bottom" class="psfd_div_margins">
						<label for="margin_bottom" class="psfd_label_margins" >Margin Bottom : </label>
						<input type="text" id="psfd_margin_bottom" name="margin_bottom" placeholder="(in px) ex : 10 for 10px" value="<?php echo $margin_bottom; ?>" />
					</div>
					<div id="psfd_div_margin_right" class="psfd_div_margins">
						<label for="margin_right" class="psfd_label_margins" >Margin Right : </label>
						<input type="text" id="psfd_margin_right" name="margin_right" placeholder="(in px) ex : 10 for 10px" value="<?php echo $margin_right; ?>" />
					</div>
				</td>
			</tr>
		</table>
	<h2 class="psfd_admin_title">Style</h2>
		

		<table class="psfd_table_100_3td">
			<tr>
				<td class="psfd_td_label">
					<label for="corners">Do you want rounded corners ? </label>
				</td>
				<td class="psfd_td_thin">
					<input type="radio" id="corners_yes" name="corners" value="25px" <?php echo (empty($corners)) ? '' : psfd_check($corners,'25px'); ?>> Yes 
					<input type="radio" id="corners_no" name="corners" value="2px" <?php echo (empty($corners)) ? 'checked="checked"' : psfd_check($corners,'2px'); ?>> No	
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td class="psfd_td_label">
					<label for="borders">Do you want a border ? </label>
				</td>
				<td class="psfd_td_thin">
					<input type="radio" id="psfd_borders_yes" name="borders" value="yes" <?php echo (empty($borders)) ? 'checked="checked"' : psfd_check($borders,'yes'); ?>> Yes 
					<input type="radio" id="psfd_borders_no" name="borders" value="no" <?php echo (empty($borders)) ? '' : psfd_check($borders,'no'); ?>> No
				</td>
				<td>
					<div id="psfd_border_color">
						<label for="border_color" class="psts_table_31_l" >Border Color : </label>
						<input id="border_color" name="border_color" type="text" value="<?php echo (empty($border_color)) ? '#000000' : $border_color; ?>" class="psfd_colorpicker" />
					</div>
				</td>
			</tr>
			<tr>
				<td class="psfd_td_label" >
					<label for="background">Choose your background type : </label>
				</td>
				<td class="psfd_td_thin">
					<select name="background" class="psfd_select_150p">
						<option <?php selected( $background, "color"); ?> id="psfd_background_color" value="color">Color</option>
						<option <?php selected( $background, "image");  ?> id="psfd_background_image" value="image">Image</option>
					</select>
				</td>
				<td>
					<div id="psfd_div_background_color">
						<label for="background_color" class="psfd_label_colorpicker">Background Color : </label>
						<input id="background_color" name="background_color" type="text" value="<?php echo (empty($background_color)) ? '#FFFFFF' : $background_color; ?>" class="psfd_colorpicker" />
					</div>
					
					<div id="psfd_div_background_image">
						<label for="image">Background Image : </label>
						<input type="text" name="image" id="psfd_media_background_image" value="<?php echo $image; ?>" />
						<input type="button" class="button background-image-button" value="Choose an image" />
					</div>
				</td>
			</tr>
		</table>
	
	
	<script type="text/javascript">
		$=jQuery.noConflict();
		jQuery(document).ready( function($) {
			if($('#psfd_position_top_right').is(':selected')) {
				$('#psfd_div_margin_top').show();
				$('#psfd_div_margin_bottom').hide();
				$('#psfd_div_margin_right').show();
			} 
			if($('#psfd_position_bottom_right').is(':selected')) {
				$('#psfd_div_margin_top').hide();
				$('#psfd_div_margin_bottom').show();
				$('#psfd_div_margin_right').show();
			} 
			
			$('select[name=position]').live('change', function(){
				if($('#psfd_position_top_right').is(':selected')) {
					$('#psfd_div_margin_top').show();
					$('#psfd_div_margin_bottom').hide();
					$('#psfd_div_margin_right').show();
				} 
				if($('#psfd_position_bottom_right').is(':selected')) {
					$('#psfd_div_margin_top').hide();
					$('#psfd_div_margin_bottom').show();
					$('#psfd_div_margin_right').show();
				} 
			});
			
			if($('#psfd_background_color').is(':selected')) {
				$('#psfd_div_background_color').show();
				$('#psfd_div_background_image').hide();
			} 
			if($('#psfd_background_image').is(':selected')) {
				$('#psfd_div_background_color').hide();
				$('#psfd_div_background_image').show();
			} 
			
			$('select[name=background]').live('change', function(){
				if($('#psfd_background_color').is(':selected')) {
					$('#psfd_div_background_color').show();
					$('#psfd_div_background_image').hide();
				} 
				if($('#psfd_background_image').is(':selected')) {
					$('#psfd_div_background_color').hide();
					$('#psfd_div_background_image').show();
				} 
			});
			
			if($('#psfd_borders_yes').is(':checked')) {
				$('#psfd_border_color').show();
			} 
			if($('#psfd_borders_no').is(':checked')) {
				$('#psfd_border_color').hide();
			} 
			
			$('input[name=borders]').live('change', function(){
				if($('#psfd_borders_yes').is(':checked')) {
					$('#psfd_border_color').show();
				} 
				if($('#psfd_borders_no').is(':checked')) {
					$('#psfd_border_color').hide();
				} 
			});
		});
	</script>
	
	<?php

}

function psfd_colorpicker_enqueue() {
    global $typenow;
    if( $typenow == 'floating_div_ps' ) {
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'psfd_colorpicker', plugin_dir_url( __FILE__ ) . 'js/psfd_colorpicker.js', array( 'wp-color-picker' ) );
    }
}
add_action( 'admin_enqueue_scripts', 'psfd_colorpicker_enqueue' );	

add_action( 'admin_enqueue_scripts', 'psfd_image_file_enqueue' );
function psfd_image_file_enqueue() {
	global $typenow;
	if( $typenow == 'floating_div_ps' ) {
		wp_enqueue_media();
 
		// Registers and enqueues the required javascript.
		wp_register_script( 'psfd_media_cover-js', plugin_dir_url( __FILE__ ) . 'js/psfd_media_cover.js', array( 'jquery' ) );
		wp_localize_script( 'psfd_media_cover-js', 'psfd_media_cover_js',
			array(
				'title' => __( 'Choose or Upload an image'),
				'button' => __( 'Use this file'),
			)
		);
		wp_enqueue_script( 'psfd_media_cover-js' );
	}
}
add_action('save_post','psfd_save_metabox');
function psfd_save_metabox($post_id){
	
	$prefix = '_floating_div_';
	
	if(isset($_POST['width'])){
		update_post_meta($post_id, $prefix.'width', sanitize_text_field($_POST['width']));
	}

	if(isset($_POST['content'])){
		update_post_meta($post_id, $prefix.'content', $_POST['content']);
	}	
	if(isset($_POST['position'])){
		update_post_meta($post_id, $prefix.'position', sanitize_text_field($_POST['position']));
	}	
	if(isset($_POST['margin_top'])){
		update_post_meta($post_id, $prefix.'margin_top', sanitize_text_field($_POST['margin_top']));
	}
	if(isset($_POST['margin_bottom'])){
		update_post_meta($post_id, $prefix.'margin_bottom', sanitize_text_field($_POST['margin_bottom']));
	}
	if(isset($_POST['margin_right'])){
		update_post_meta($post_id, $prefix.'margin_right', sanitize_text_field($_POST['margin_right']));
	}
	if(isset($_POST['corners'])){
		update_post_meta($post_id, $prefix.'corners', sanitize_text_field($_POST['corners']));
	}
	if(isset($_POST['borders'])){
		update_post_meta($post_id, $prefix.'borders', sanitize_text_field($_POST['borders']));
	}
	if(isset($_POST['border_color'])){
		update_post_meta($post_id, $prefix.'border_color', sanitize_text_field($_POST['border_color']));
	}
	if(isset($_POST['background'])){
		update_post_meta($post_id, $prefix.'background', sanitize_text_field($_POST['background']));
	}
	if(isset($_POST['background_color'])){
		update_post_meta($post_id, $prefix.'background_color', sanitize_text_field($_POST['background_color']));
	}
	if(isset($_POST['image'])){
		update_post_meta($post_id, $prefix.'image', sanitize_text_field($_POST['image']));
	}
}

add_action( 'manage_floating_div_ps_posts_custom_column' , 'psfd_custom_columns_pro', 10, 2 );

function psfd_custom_columns_pro( $column, $post_id ) {
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

function psfd_add_columns($columns) {
    return array_merge($columns, 
              array('shortcode' => __('Shortcode'),
                    ));
}
add_filter('manage_floating_div_ps_posts_columns' , 'psfd_add_columns');

function psfd_get_wysiwyg_output_pro( $meta_key, $post_id = 0 ) {
    global $wp_embed;

    $post_id = $post_id ? $post_id : get_the_id();

    $content = get_post_meta( $post_id, $meta_key, 1 );
    $content = $wp_embed->autoembed( $content );
    $content = $wp_embed->run_shortcode( $content );
    $content = do_shortcode( $content );
    $content = wpautop( $content );

    return $content;
}

function psfd_shortcode($atts) {
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
	$div_width = get_post_meta( get_the_id(), $prefix . 'width', true );
	if ($div_width == '')
		$div_width = '260px';
	$div_width_class = "psfd_width_".$div_width;

	$div_corners = get_post_meta( get_the_id(), $prefix . 'corners', true );
	$div_position = get_post_meta( get_the_id(), $prefix . 'position', true );
	if ($div_position == '')
		$div_position = 'top_right';
	
	if ($div_position == 'top_right')
	{
		$div_margin_top = get_post_meta( get_the_id(), $prefix . 'margin_top', true );
		if ($div_margin_top == "")
			$div_margin_top = 0;
	}
	if ($div_position == 'bottom_right')
	{
		$div_margin_bottom = get_post_meta( get_the_id(), $prefix . 'margin_bottom', true );
		if ($div_margin_bottom == "")
			$div_margin_bottom = 0;
	}	

	$div_margin_right = get_post_meta( get_the_id(), $prefix . 'margin_right', true );
	if ($div_margin_right == "")
		$div_margin_right = 0;
	
	$div_borders = get_post_meta( get_the_id(), $prefix.'borders',true);
	$div_border_color = get_post_meta( get_the_id(), $prefix . 'border_color', true );
	
	if($div_borders == "yes" || $div_borders == "")
		$border_class = 'border:2px solid '.$div_border_color.'';
	if($div_borders == "no")
		$border_class = "";

	$div_background = get_post_meta( get_the_id(), $prefix . 'background', true );

	if ($div_background == '')
		$div_background = 'color';
	$background = 'background:#FFFFFF';
	if ($div_background == 'color')
	{
		$div_background_color = get_post_meta( get_the_id(), $prefix . 'background_color', true );
		$background = 'background:'.$div_background_color.'';
	}
	
	if ($div_background == 'image')
	{
		$div_image = get_post_meta( get_the_id(), $prefix.'image',true);
		$background = 'background-image:url('.esc_attr($div_image).')';
	}
		
	$postid = get_the_ID();
	
	$css_position = '';
	switch ($div_position) {
    case 'top_right':
		$css_position .= 'right:'.$div_margin_right.'px;';   
		$css_position .= 'top:'.$div_margin_top.'px;';  
        break;
	case 'bottom_right':
		$css_position .= 'right:'.$div_margin_right.'px;';   
		$css_position .= 'bottom:'.$div_margin_bottom.'px;';  
        break;
    default:
		$css_position .= 'right:10px;';    
		$css_position .= 'top:10px;';  
	}
	
	$output = '';

	$output .= '<div id="floatdiv_'.$postid.'" class="exp_floatdiv_content_pro '.$div_width_class.'" style="'.$css_position.';border:2px solid '.$div_border_color.';border-radius:'.esc_attr( $div_corners).';'.$background.';">';
	$output .= ''. psfd_get_wysiwyg_output_pro( $prefix . 'content', get_the_ID() )  .'';
	$output .= '</div>';
	
	}
	endforeach; wp_reset_query();
	return $output;
}
add_shortcode( 'floating_div_ps', 'psfd_shortcode' );


	
?>