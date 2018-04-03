<?php 

  //ADD STYLES

  function dl_enqueue_style() {
    $theme_data = wp_get_theme();

    /* Register styles Bootstrap*/
    wp_register_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', null, $theme_data->get( '4.0.0' ));

    /* Register own style */ //DEJAMOS NULL EN VEZ DE ARRAY SI NO DEPENDE DE OTRO CSS
    wp_register_style('main', get_parent_theme_file_uri('/css/main.css'), null , $theme_data->get('1.0'));

    //CALL THE STYLES

    wp_enqueue_style('bootstrap_css');
    wp_enqueue_style('main');
  }

  add_action('wp_enqueue_scripts', 'dl_enqueue_style');

  // ADD JAVASCRIPT

  function dl_enqueue_scripts(){
    
    /* Register Bootstrap scripts */
    wp_register_script('bootstrap_js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery') , '4.0.0', true);
    /* Register scripts */
    wp_register_script('scripts', get_parent_theme_file_uri('/js/script.js'), null , '1.0', true);

    //en true el script queda en el footer de lo contrario queda en el header si elijes false

    /* Enqueue Scripts */
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap_js');
    wp_enqueue_script('scripts');

  }

  add_action('wp_enqueue_scripts', 'dl_enqueue_scripts');

?>