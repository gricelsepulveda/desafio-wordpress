<?php get_header();?>
<h1>Mi primer tema</h1>
<?php
  if ( have_posts() ) : //PREGUNTA SI HAY POST DENTRO
    while ( have_posts() ) : the_post(); 
    
    //SI ES REAL ENTONCES QUE AGREGUE TODA LA ENTRADA EN COMPLETO O EL TITULO O OTTRA COSA...
      
      the_title();
      the_excerpt();

    endwhile;

  //SINO ENCUENTRA ENTRADAS EN ESTE LOOP TE SALDRÁ ESTO:  
  else :
    echo wpautop( 'Sorry, no posts were found' );
  endif;

?>

<?php get_footer();?>