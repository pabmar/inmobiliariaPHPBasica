<?php

  /**
   * Clase inmueble para posterior almacenaje en array.
   */
  class inmueble

  {

    public $id;
    public $direccion;
    public $ciudad;
    public $telefono;
    public $codigoPostal;
    public $tipo;
    public $precio;


    function __construct($id,$direccion,$ciudad,$telefono,$codigoPostal,$tipo,$precio)
    {
       $this ->id = $id;
       $this ->direccion = $direccion;
       $this ->ciudad = $ciudad;
       $this ->telefono =  $telefono;
       $this ->codigoPostal = $codigoPostal;
       $this ->tipo = $tipo;
       $this ->precio = $precio;
    }

    function getData(){
      $array['id'] = $this->id;
      $array['direccion'] = $this->direccion;
      $array['ciudad'] = $this->ciudad;
      $array['telefono'] = $this->telefono;
      $array['codigoPostal'] = $this->codigoPostal;
      $array['tipo'] = $this->tipo;
      $array['precio'] = $this->precio;

    }
  }





 ?>
