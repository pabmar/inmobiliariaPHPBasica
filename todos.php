<?php

  require('metodos.php');
  $var = obtenerInfo();
  $texto="";
  foreach ($var as $key => $value) {
    $texto = $texto.'<div class="itemMostrado card">'.
       '<img src="img/home.jpg" alt="fto" height="90%" >'.
       '<ul>'.'<li>'.'Ubicacion: '.$var[$key]['Direccion'].'</li>'.
       '<li>'.'Ciudad: '.$var[$key]['Ciudad'].'</li>'.
       '<li>'.'Telefono: '.$var[$key]['Telefono'].'</li>'.
       '<li>'.'Codigo Postal: '.$var[$key]['Codigo_Postal'].'</li>'.
       '<li>'.'Tipo: '.$var[$key]['Tipo'].'</li>'.
       '<li>'.'Precio: <p class="precioTexto">'.$var[$key]['Precio'].'</p></ul>'.'</div>';
  }
  echo $texto;

 ?>
