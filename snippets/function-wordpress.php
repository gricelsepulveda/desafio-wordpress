<?php  
  //MEET WORDPRESS FUNCTIONS

  function dl_image_sizes($sizes) {
    $addsizes = array (
      "slideshow" => __( "Tamaño del slideshow"),
      "custom_logo" => __( "Tamaño personalizado del logo" ),
      "entradas" => __( "Tamaño personalizado de las entradas" ),
    );
    return array_merge($sizes, $addsizes);
  }

  if (function_exists( 'add_theme_support' ) ) {
    //PERSONALIZA EL TAMAÑO DEL SLIDESHOW
    add_image_size( 'slideshow', 800, 600, true);
    //PERSONALIZA EL TAMAÑO DEL LOGO
    add_image_size( 'custom_logo', 150, 150, true);
    //PERSONALIZA EL TAMAÑO DE LAS ENTRADAS
    add_image_size( 'entradas', 750, 490, true);

    add_filter('image_size_names_choose', 'dl_image_sizes');

  }
?>