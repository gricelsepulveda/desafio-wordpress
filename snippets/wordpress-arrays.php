<?php 

  //INDEXED ARRAYS ARREGLOS INDEXADOS POR NÚMEROS
  $categories = array("PHP", "Javascript", "HTML", "CSS");

  echo $categories[0];

  echo "<br/>";

  //ASSOCIATIVE ARRAYS O ARREGLOS ASOCIATIVOS CON STRINGS PERSONALIZADOS PARA ACCEDER A SU CONTENIDO

  $args = array(
    "author" => "Gonzalo Salinas",
    "category" => "PHP",
    "post_name" => "Cinco formas de aprender Wordpress fácilmente"
  );

  echo $args['post_name'] . ", entrada publicada por " . $args['author'] . ", en la categoría de " . $args['category'];

  echo "<br/>";

  //IMPRIME UN ARRAY CON SUS VALORES Y POSICIONES (LLAVES)
  var_dump($args);

  echo "<br/>";

  //IMPRIME SÓLO LA DATA DEL ARRAY
  print_r($args);

?>

