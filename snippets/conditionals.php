<?php 
  $entries = 3;

  //TYPICAL IF ELSE
  if ($entries > 0) {
    echo "There are entries";
  } else {
    echo "There aren't entries";
  }

  echo "<br/>";

  //CONDITIONAL ELSE IF PERMITE ESTABLECER COMPARACIONES LÓGICAS EN EL CODIGO

  $hour = date("H");
  if ($hour < "12") {
    echo "Buenos días";
  } elseif ($hora < "20") {
    echo "Buenas tardes";
  } else {
    echo "Buenas noches";
  }

?>