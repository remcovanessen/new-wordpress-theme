<?php 

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/reset.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'bluestyle', get_template_directory_uri() . '/springblue-style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// WordPress Titles
add_theme_support( 'title-tag' );

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
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }


// Support Featured Images
add_theme_support( 'post-thumbnails' );

// new theme
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() . '/springblue-style.css' );
    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
