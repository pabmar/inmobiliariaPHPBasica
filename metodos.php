<?php
  require('cInmuebles.php');

  function obtenerInfo(){
    $data_file = fopen("data-1.json","r");
    $data_read = fread($data_file, filesize("data-1.json"));
    $data = json_decode($data_read, true);
    fclose($data_file);
    return $data;

  }

 function obtenerFiltroCiudad(){
   $data_file = fopen("data-1.json","r");
   $data_read = fread($data_file, filesize("data-1.json"));
   $data = json_decode($data_read, true);
   fclose($data_file);
   for ($i=0; $i < count($data) ; $i++) {

                  $fCiudadTodas[$i] = $data[$i]['Ciudad'];
       }
  $fCiudad = array_values(array_unique($fCiudadTodas));
   return $fCiudad;
 }

 function obtenerFiltroTipo(){
   $data_file = fopen("data-1.json","r");
   $data_read = fread($data_file, filesize("data-1.json"));
   $data = json_decode($data_read, true);
   fclose($data_file);
   for ($i=0; $i < count($data) ; $i++) {

                  $fTipoTodas[$i] = $data[$i]['Tipo'];
       }
  $fTipo = array_values(array_unique($fTipoTodas));
   return $fTipo;
 }



 ?>
