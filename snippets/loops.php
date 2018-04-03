<?php 

 //LOOP WHILE LE DICE A PHP QUE EJECUTE SENTENCIAS SIEMPRE QUE LAS EVALUE COMO VERDADERAS. EN WORDPRESS EXISTE UN LOOP BASICO QUE LLAMA A LAS ENTRADAS VIA WHILE


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