<?php

require ('metodos.php');
  $var = obtenerFiltroTipo();
  $dat ='';
  for ($i=0; $i <  count($var); $i++) {
    $dat = $dat.'<option value="'.$var[$i].'">'.$var[$i].'</option>';
  }
  echo $dat;


 ?>
