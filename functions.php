<?php

function beautifultheme_scripts() {
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    // wp_enqueue_script( 'blog', get_template_directory_uri() . '/js/toggle.js' );
}

add_action( 'wp_enqueue_scripts', 'beautifultheme_scripts' );


function beautifultheme_google_fonts() {
    wp_register_style('Questrial', 'https://fonts.googleapis.com/css?family=Questrial:400,600,700,800');
    wp_enqueue_style( 'Questrial');
}

add_action('wp_print_styles', 'beautifultheme_google_fonts');

function myfavicon() {
  echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'myfavicon');

// Custom settings
function custom_settings_add_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );
// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
			<?php
           settings_fields('section');
           do_settings_sections('theme-options');      
           submit_button(); 
       ?>
		</form>
	</div>
  <?php 
  
}

//Custom Logo
function mytheme_setup() {
  add_image_size('mytheme-logo', 160, 90);
  add_theme_support('custom-logo', array(
      'size' => 'mytheme-logo'
  ));
}

add_action('after_setup_theme', 'mytheme_setup');


    
function setting_github() { ?>
			<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
      <?php 
}

function setting_linkedin() { ?>
  <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" />
  <?php 
}

function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
  <?php 
}
      
function setting_medium() { ?>
			<input type="text" name="medium" id="medium" value="<?php echo get_option('medium'); ?>" />
      <?php 
}

function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('linkedin', 'Linkedin URL', 'setting_linkedin', 'theme-options', 'section');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('medium', 'Medium URL', 'setting_medium', 'theme-options', 'section');
  
  register_setting('section', 'github');
  register_setting('section', 'linkedin');
  register_setting('section', 'twitter');
  register_setting('section', 'medium');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

