<?php

  //DECLARAMOS VARIABLES
  $a = 5;
  $b = 7;

  //OPERACIONES CON ESTAS VARIABLES

  /*SI AMBAS SON VERDADERAS ES VERDADERO */
  if($a > 3 && $b < 10){
    echo "verdadero";
  }
  else {
    echo "falso";
  }

  echo "<br>";

  /*SI UNA DE LAS SENTENCIAS SON VERDADERAS ES VERDADERO SI AMBAS SON FALSAS ES FALSO (OPERADOR OR) */
  if($a > 6 || $b < 2){
    echo "verdadero";
  }
  else {
    echo "falso";
  }

  echo "<br>";

  /* EVALUA LA OPERACIÓN EN PARÉNTESIS Y LUEGO EL NOT INVIERTE EL RESULTADO A SU CONTRARIO (OPERADOR NOT ) */
  if(!($a > 6 || $b < 2)){
    echo "verdadero";
  }
  else {
    echo "falso";
  }

?>