<?php
   /*
   Plugin Name: NavThemes Widgets
   Plugin URI: https://www.navthemes.com/navthemes-widgets
   Description: This Plugin add About Custom widgets.
   Version: 1.3
   Author: NavThemes
   Author URI: https://www.navthemes.com/
   License: GPL2
   */


/*
	Register Widgets 
*/

define( 'NavThemes_Widgets_DIR', plugin_dir_path( __FILE__ ) );
define( 'NavThemes_Widgets_TEMPLATE_DIR', NavThemes_Widgets_DIR . '/widgets/' );

define( 'NavThemes_Widgets_URL', plugin_dir_url( __FILE__ ) );

if(!function_exists('NavThemes_Widgets')):

function NavThemes_Widgets (){

	register_widget( 'navthemes_widgets_about' );
   register_widget( 'navthemes_widgets_plan' );
   register_widget( 'navthemes_widgets_service' );
   register_widget( 'navthemes_widgets_callaction' );
   register_widget( 'navthemes_widgets_team' );
   register_widget( 'navthemes_widgets_partners' );
   register_widget( 'navthemes_widgets_testimonials' );
   register_widget( 'navthemes_widgets_heading' );
}

add_action( 'widgets_init', 'NavThemes_Widgets' );

endif;

/*
   Add image upload js
*/

if(!function_exists('upload_scripts')) {

    function upload_scripts()
    {
      wp_enqueue_media();
      wp_enqueue_script('navthemes-widget', NavThemes_Widgets_URL . 'assets/js/widget.js' , false, '1.0', true);
    }
  
      add_action('admin_enqueue_scripts', 'upload_scripts');

}

/*
   Add front end CSS
 */

if(!function_exists('navthemes_widgets_styles')) {
function navthemes_widgets_styles() {

   wp_register_style( 'navthemes_widgets_styles', plugins_url( '/assets/css/navthemes-widget.css', __FILE__ ) );
   wp_enqueue_style( 'navthemes_widgets_styles' );
}
add_action( 'wp_enqueue_scripts', 'navthemes_widgets_styles' );
}


// Lets add widgets file here
include(NavThemes_Widgets_DIR.'widgets/about-widget.php');
include(NavThemes_Widgets_DIR.'widgets/plan-widget.php');
include(NavThemes_Widgets_DIR.'widgets/services-widget.php');
include(NavThemes_Widgets_DIR.'widgets/callaction-widget.php');
include(NavThemes_Widgets_DIR.'widgets/team-widget.php');
include(NavThemes_Widgets_DIR.'widgets/partners-widget.php');
include(NavThemes_Widgets_DIR.'widgets/testimonials-widget.php');
include(NavThemes_Widgets_DIR.'widgets/heading-widget.php');