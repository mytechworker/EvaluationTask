<?php
/**
 * Plugin Name: CTA Button Shortcode
 * Description: A plugin that adds a custom shortcode to display a CTA button.
 * Version: 1.0
 * Author: Your Name
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 */


defined ('ABSPATH') or die('you can\t acces This file');


define('PLUGIN_URL', plugin_dir_url( __FILE__) );


class CTAButtonShortcode
{
    function register(){
        add_action('wp_enqueue_scripts',array($this,'enqueue'));
    }

    //include script and css
    function enqueue(){

        wp_enqueue_style('mypluginstyle' , plugins_url('/assets/css/style.css', __FILE__));
        wp_enqueue_script('mypluginscript' , plugins_url('/assets/js/counter.js', __FILE__));

    }
}

if(class_exists('CTAButtonShortcode')){
    $ctabuttonshortcode= new CTAButtonShortcode();
    $ctabuttonshortcode->register();

}



register_activation_hook(__FILE__ , function(){
    flush_rewrite_rules();

});

register_deactivation_hook(__FILE__ ,function(){
   flush_rewrite_rules();

});



function cta_button_shortcode( $atts ) {

    return '
    <div class="cta-content">
    <h2>'. esc_attr( $atts['title'] ).'</h2>
    <p>' . esc_html( $atts['message'] ) . '</p>
    <a id="cta-btn" class="cta-button" target="_blank" href="' . esc_attr( $atts['button_url'] ) . '">' . esc_html( $atts['button_label'] ) . '</a></div>';
}
add_shortcode( 'cta_box', 'cta_button_shortcode' );







