<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
  wp_enqueue_script( 'logic', get_template_directory_uri() . '/contentSwitch.js', array(), '1.0.0', true );
}

?>