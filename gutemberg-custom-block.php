<?php
/*
Plugin Name: Custom Gutemberg Blocks
Author: Yasmine Khadija Talby
Version: 0.1.0
Description: Adding custom gutemberg blocks to UCLA CHILD THEME.
*/
function gutemberg_blocks()
{
// check if gutemberg is active
	if (!function_exists('register_block_type')){
		return;
	}
	//UCLA RIBBON//
	
	//add block script
    wp_register_script('ribbon', 
    plugin_dir_url(__FILE__) . 'ucla-ribbon/ribbon.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    filemtime( plugin_dir_path(__FILE__) . 'ucla-ribbon/ribbon.js')
  );
    //add block style
 wp_register_style(
        'ribbon',
        plugins_url( 'ucla-ribbon/ribbon.css', __FILE__ ),
        [],
        filemtime( plugin_dir_path( __FILE__ ) . 'ucla-ribbon/ribbon.css' )
    );     

    //Register block script and style
    register_block_type('gutemberg-custom-blocks/ribbon', [
	'style' => 'ribbon',
	'editor_script' => 'ribbon',
]);
	
	// UCLA RIBBON HIGHLIGHT //
		
//add block script
    wp_register_script('ribbon-highlight',
    plugin_dir_url(__FILE__) . 'ucla-ribbon/ribbon-highlight.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    filemtime( plugin_dir_path(__FILE__) . 'ucla-ribbon/ribbon-highlight.js')
  );

    //add block style
 wp_register_style(
        'ribbon-highlight',
        plugins_url( 'ucla-ribbon/ribbon-highlight.css', __FILE__ ),
        [],
        filemtime( plugin_dir_path( __FILE__ ) . 'ucla-ribbon/ribbon-highlight.css' )
    );

    //Register block script and style
    register_block_type('gutemberg-custom-blocks/ribbon-highlight', [
        'style' => 'ribbon-highlight',
        'editor_script' => 'ribbon-highlight',
]);
    //UCLA BUTTON//
//add block script
    wp_register_script('primary-button',
    plugin_dir_url(__FILE__) . 'ucla-button/primary-button.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    filemtime( plugin_dir_path(__FILE__) . 'ucla-button/primary-button.js')
  );

    //add block style
 wp_register_style(
        'primary-button',
        plugins_url( 'ucla-button/primary-button.css', __FILE__ ),
        [],
        filemtime( plugin_dir_path( __FILE__ ) . 'ucla-button/primary-button.css' )
    );

    //Register block script and style
    register_block_type('gutemberg-custom-blocks/primary-button', [
        'style' => 'primary-button',
        'editor_script' => 'primary-button',
]);

}
add_action('init', 'gutemberg_blocks');    


