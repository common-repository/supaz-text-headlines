<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
  Plugin Name: Supaz Text Headlines - A simple text headlines plugin 
  Plugin URI:  http://www.supazthemes.com/plugins/supaz-text-headlines
  Description: Simple mega text headlines plugin
  Version:     1.0.2
  Author:      Supazthemes
  Author URI:  http://www.supazthemes.com/
  License:     GPL2 or later
  License URI: https://www.gnu.org/licenses/gpl-2.0.html
  Domain Path: /languages/
  Text Domain: supaz-text-headlines
*/

  if(!class_exists('Supaz_Text_Headlines')){
    class Supaz_Text_Headlines{
      function __construct(){
        $this->define_constants();
        add_action('init', array($this,'mh_init') );
        add_action('admin_enqueue_scripts',array($this,'register_backend_assets'));
        add_action('wp_enqueue_scripts',array($this,'register_frontend_assets'));
        add_action('admin_menu',array($this,'mh_menu')); 
        register_activation_hook(__FILE__, array($this, 'mh_load_default_settings'));
        add_action('admin_post_mh_settings_save_action',array($this,'mh_save_settings'));
        add_shortcode( 'supaz_text_headlines', array($this,'supaz_text_headlines') );
        add_action('admin_post_mh_restore_settings', array($this, 'mh_restore_settings'));
      }

      /* Define Folder Paths*/
      function define_constants(){
        defined('MH_CSS_DIR') or define('MH_CSS_DIR',plugin_dir_url(__FILE__).'css');
        defined('MH_JS_DIR') or define('MH_JS_DIR',plugin_dir_url(__FILE__).'js');
        defined('MH_IMG_DIR') or define('MH_IMG_DIR',plugin_dir_url(__FILE__).'image');
        defined('MH_PATH') or define('MH_PATH',plugin_dir_path(__FILE__));
        defined('MH_VERSION') or define('MH_VERSION','1.0.1');
      }

      /* Register Text-Domain*/
      function mh_init(){
        load_plugin_textdomain( 'supaz-text-headlines', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
      }

      /* Register Backend Assets*/
      function register_backend_assets(){
        wp_enqueue_style('mh-backend-style',MH_CSS_DIR.'/backend.css',array(),MH_VERSION);
        wp_enqueue_style('mh-font-awesome-style',MH_CSS_DIR.'/font-awesome.min.css',array(),MH_VERSION);
        wp_enqueue_style( 'wp-color-picker' ); 
        wp_enqueue_script( 'wp-color-picker-alpha', MH_JS_DIR . '/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.2.2');        
        wp_enqueue_script('mh-backend-script',MH_JS_DIR.'/backend.js',array('jquery','wp-color-picker','wp-color-picker-alpha'),MH_VERSION);

      }

      /* Register Frontend Assets*/
      function register_frontend_assets(){
        wp_enqueue_style('mh-frontend-style',MH_CSS_DIR.'/frontend.css',array(),MH_VERSION);
        wp_enqueue_script('mh-frontend-script',MH_JS_DIR.'/frontend.js',array('jquery'),MH_VERSION);
        wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Amatic+SC|Merriweather|Roboto+Slab|Montserrat|Lato|Italianno|PT+Sans|PT+Sans+Narrow|Raleway|Roboto|Open+Sans|Great+Vibes|Varela+Round|Roboto+Condensed|Fira+Sans|Lora|Signika|Cabin|Arimo|Droid+Serif|Arvo' );
        
      }

      /* Register plugin menu page*/
      function mh_menu(){
        add_menu_page(
          __('Supaz Text Headlines','supaz-text-headlines'),
          __('Supaz Text Headlines','supaz-text-headlines'),
          'manage_options',
          'supaz-text-headlines',
          array($this,'mh_settings_page'),'dashicons-align-center'
        );
      }

      /* Register plugin settings page*/
      function mh_settings_page(){
        include(MH_PATH.'/inc/backend/settings.php');
      }

      /* Print array function*/
      function print_array($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
      }

      /* Register plugin shortcode*/
      function supaz_text_headlines(){
        $mh_settings = get_option('mh_settings');
        if(empty($mh_settings)){
          $mh_settings = $this->get_default_settings();   
        }
        $mh_custom_settings = get_option('mh_custom_settings');
        if(empty($mh_custom_settings)){
          $mh_custom_settings = $this->get_default_custom_settings();   
        }
        ob_start();
        include(MH_PATH.'/inc/frontend/shortcode.php');
        $form_html = ob_get_contents();
        ob_end_clean();
        return $form_html;
      }

      /* Assign default settings*/
      function get_default_settings(){
        $mh_settings = array();
        for($i = 1; $i < 5; $i++){  
          $mh_settings[$i]['mh-enable-'.$i] = 1;
          $mh_settings[$i]['mh-title-'.$i] = '';
          $mh_settings[$i]['mh-sub-title-'.$i] = '';
        }
        return $mh_settings;
      }

      /* Assign default custom settings*/
      function get_default_custom_settings(){
        $mh_custom_settings = array();
        $mh_custom_settings['mh_font_family'] = 'Lato';
        $mh_custom_settings['mh_main_font_size'] = '40';
        $mh_custom_settings['mh_nav_font_size'] = '20';
        $mh_custom_settings['mh_main_font_color'] = '#000000';
        $mh_custom_settings['mh_nav_font_color'] = '#000000';
        
        
        $mh_custom_settings['mh_left_border_style'] = 'solid';
        $mh_custom_settings['mh_left_border_width'] = '10';
        $mh_custom_settings['mh_left_border_color'] = '#007acc';

        $mh_custom_settings['mh_nav_left_border_style'] = 'solid';
        $mh_custom_settings['mh_nav_left_border_width'] = '1';
        $mh_custom_settings['mh_nav_left_border_color'] = '#eeeeee';

        return $mh_custom_settings;
      }

      function mh_load_default_settings() {
        $default_settings = $this->get_default_settings();
        if (!get_option('mh_settings')) {
          update_option('mh_settings', $default_settings);
        }

        $default_custom_settings = $this->get_default_custom_settings();
        if (!get_option('mh_custom_settings')) {
          update_option('mh_custom_settings', $default_custom_settings);
        }
      }

      function mh_restore_settings() {
        if (!empty($_GET) && wp_verify_nonce($_GET['_wpnonce'], 'mh-restore-nonce')) {
          $default_settings = $this->get_default_settings();
          $default_custom_settings = $this->get_default_custom_settings();
          update_option('mh_settings', $default_settings);
          update_option('mh_custom_settings', $default_custom_settings);
          wp_redirect(admin_url('admin.php?page=supaz-text-headlines&restore-message=1'));
        } else {
          die('No script kiddies please!');
        }
      }

      function mh_save_settings(){
        if(check_admin_referer('mh_admin_option-update')){
          if(isset($_POST['mh_settings_save_button'])){
            $mh_post = stripslashes_deep($_POST);

            $mh_source = isset($mh_post['mh_source'])?sanitize_text_field($mh_post['mh_source']):'mh-posts';
            $check_source = update_option('mh_source',$mh_source);

            $mh_post_source = isset($mh_post['mh_post_source'])?sanitize_text_field($mh_post['mh_post_source']):'mh-latest-post';
            $check_posts = update_option('mh_post_source',$mh_post_source);

            $mh_category = isset($mh_post['mh_category'])?sanitize_text_field($mh_post['mh_category']):'';
            $check_category = update_option('mh_category',$mh_category);
            
            $mh_settings = array();
            for($i = 1; $i < 5; $i++){  
              $mh_settings[$i]['mh-enable-'.$i] = isset($mh_post['mh-enable-'.$i])?1:0;
              $mh_settings[$i]['mh-title-'.$i] = sanitize_text_field($mh_post['mh-title-'.$i]);
              $mh_settings[$i]['mh-sub-title-'.$i] = sanitize_text_field($mh_post['mh-sub-title-'.$i]);
            }

            $mh_custom_settings                               = array();
            $mh_custom_settings['mh_layout']                  = sanitize_text_field($mh_post['mh_layout']);
            $mh_custom_settings['mh_font_family']             = sanitize_text_field($mh_post['mh_font_family']);
            
            $mh_custom_settings['mh_left_border_style']       = sanitize_text_field($mh_post['mh_left_border_style']);
            $mh_custom_settings['mh_left_border_width']       = sanitize_text_field($mh_post['mh_left_border_width']);
            $mh_custom_settings['mh_left_border_color']       = sanitize_text_field($mh_post['mh_left_border_color']);
            
            $mh_custom_settings['mh_right_border_style']      = sanitize_text_field($mh_post['mh_right_border_style']);
            $mh_custom_settings['mh_right_border_width']      = sanitize_text_field($mh_post['mh_right_border_width']);
            $mh_custom_settings['mh_right_border_color']      = sanitize_text_field($mh_post['mh_right_border_color']);
            
            $mh_custom_settings['mh_top_border_style']        = sanitize_text_field($mh_post['mh_top_border_style']);
            $mh_custom_settings['mh_top_border_width']        = sanitize_text_field($mh_post['mh_top_border_width']);
            $mh_custom_settings['mh_top_border_color']        = sanitize_text_field($mh_post['mh_top_border_color']);
            
            $mh_custom_settings['mh_bottom_border_style']     = sanitize_text_field($mh_post['mh_bottom_border_style']);
            $mh_custom_settings['mh_bottom_border_width']     = sanitize_text_field($mh_post['mh_bottom_border_width']);
            $mh_custom_settings['mh_bottom_border_color']     = sanitize_text_field($mh_post['mh_bottom_border_color']);
            
            $mh_custom_settings['mh_nav_left_border_style']   = sanitize_text_field($mh_post['mh_nav_left_border_style']);
            $mh_custom_settings['mh_nav_left_border_width']   = sanitize_text_field($mh_post['mh_nav_left_border_width']);
            $mh_custom_settings['mh_nav_left_border_color']   = sanitize_text_field($mh_post['mh_nav_left_border_color']);
            
            $mh_custom_settings['mh_nav_right_border_style']  = sanitize_text_field($mh_post['mh_nav_right_border_style']);
            $mh_custom_settings['mh_nav_right_border_width']  = sanitize_text_field($mh_post['mh_nav_right_border_width']);
            $mh_custom_settings['mh_nav_right_border_color']  = sanitize_text_field($mh_post['mh_nav_right_border_color']);
            
            $mh_custom_settings['mh_nav_top_border_style']    = sanitize_text_field($mh_post['mh_nav_top_border_style']);
            $mh_custom_settings['mh_nav_top_border_width']    = sanitize_text_field($mh_post['mh_nav_top_border_width']);
            $mh_custom_settings['mh_nav_top_border_color']    = sanitize_text_field($mh_post['mh_nav_top_border_color']);
            
            $mh_custom_settings['mh_nav_bottom_border_style'] = sanitize_text_field($mh_post['mh_nav_bottom_border_style']);
            $mh_custom_settings['mh_nav_bottom_border_width'] = sanitize_text_field($mh_post['mh_nav_bottom_border_width']);
            $mh_custom_settings['mh_nav_bottom_border_color'] = sanitize_text_field($mh_post['mh_nav_bottom_border_color']);
            
            $mh_custom_settings['mh_main_background_color']   = sanitize_text_field($mh_post['mh_main_background_color']);
            $mh_custom_settings['mh_main_font_color']         = sanitize_text_field($mh_post['mh_main_font_color']);
            
            $mh_custom_settings['mh_nav_background_color']    = sanitize_text_field($mh_post['mh_nav_background_color']);
            $mh_custom_settings['mh_nav_font_color']          = sanitize_text_field($mh_post['mh_nav_font_color']);
            
            $mh_custom_settings['mh_main_font_size']          = sanitize_text_field($mh_post['mh_main_font_size']);
            $mh_custom_settings['mh_nav_font_size']           = sanitize_text_field($mh_post['mh_nav_font_size']);
            

           $check        = update_option('mh_settings',$mh_settings);
           $check_custom = update_option('mh_custom_settings',$mh_custom_settings);
                       
            wp_redirect(admin_url('admin.php?page=supaz-text-headlines&message=1'));
            exit;
          }
        }
        else{
          die('No script kiddies please!');
        }
      }

    } /* End of Class Supaz_Text_Headlines*/
    $supaz_text_headlines = new Supaz_Text_Headlines();
    
  } /* End of if condition Supaz_Text_Headlines class*/