<?php

 $ciudad = $_GET['ciudad'];
 $tipo = $_GET['tipo'];
 $precio = $_GET['precio'];
 $prefi = explode(';',$precio);
 $precioMin = $prefi[0];
 $precioMax = $prefi[1];
 $dataTipo = array();
 $dataCiudad = array();
 $dataF = array();
 $numTipo = '0';
 $numCity = '0';
 $numPre = '0';
 $texto = '';
$data_file = fopen("data-1.json","r");
$data_read = fread($data_file, filesize("data-1.json"));
$data = json_decode($data_read, true);
fclose($data_file);


for ($i=0; $i < count($data) ; $i++) {

  if ($tipo != '') {

    if ($data[$i]['Tipo'] == $tipo) {
      $dataTipo[$numTipo] = $data[$i];
      $numTipo++;
     }
    }else {
      $dataTipo = $data;
        }
}
    for ($j=0; $j  < count($dataTipo); $j++) {

      if ($ciudad != '') {

        if ($dataTipo[$j]['Ciudad'] == $ciudad) {
          $dataCiudad[$numCity] = $dataTipo[$j];
          $numCity++;

        }
      }else {
        $dataCiudad = $dataTipo;
        }
    }

    for ($k=0; $k < count($dataCiudad); $k++) {
      $sinSigno = str_replace('$','',$dataCiudad[$k]['Precio']) ;
      $precioLimpio = str_replace(',','',$sinSigno);

        if ($precioLimpio  > $precioMin && $precioLimpio < $precioMax ) {
          $dataF[$numPre] = $dataCiudad[$k];

          $numPre++;
        }
        }
        foreach ($dataF as $key => $value) {
          $texto = $texto.'<div class="itemMostrado card">'.
             '<img src="img/home.jpg" alt="fto" height="90%" >'.
             '<ul>'.'<li>'.'Ubicacion: '.$dataF[$key]['Direccion'].'</li>'.
             '<li>'.'Ciudad: '.$dataF[$key]['Ciudad'].'</li>'.
             '<li>'.'Telefono: '.$dataF[$key]['Telefono'].'</li>'.
             '<li>'.'Codigo Postal: '.$dataF[$key]['Codigo_Postal'].'</li>'.
             '<li>'.'Tipo: '.$dataF[$key]['Tipo'].'</li>'.
             '<li>'.'Precio: <p class="precioTexto">'.$dataF[$key]['Precio'].'</p></ul>'.'</div>';
        }
        echo $texto;







?>
