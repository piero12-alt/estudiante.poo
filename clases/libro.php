<?php

class libro {
    public $titulo;
    public $auto;
    public $precio;

    public function __construct($titulo,$auto,$precio)
    {
      $this->titulo = $titulo; 
      $this->auto = $auto; 
      $this->precio = $precio; 
    }
    public function mostrarinfo()
    {
         return "la info es :". $this ->titulo; $this ->auto; $this ->precio; 
    }

}