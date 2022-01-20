<?php
  class Jugador{
    private $nombre;
    private $dorsal;
    private $edad;

    public function __construct($nombre, $dorsal, $edad){//son dos barras bajas.
      $this -> nombre = $nombre;
      $this -> dorsal = $dorsal;
      $this -> edad = $edad;
    }

    //GETTER Y SETTERS
    public function getNombre(){
      return $this -> nombre;
    }
    public function setNombre($nombre){
      $this -> nombre= $nombre;
    }
    public function getDorsal(){
      return $this -> dorsal;
    }
    public function setDorsal($dorsal){
      $this -> dorsal= $dorsal;
    }
    public function getEdad(){
      return $this -> edad;
    }
    public function setEdad($edad){
      $this -> edad= $edad;
    }

    //OTRAS FUNCIONES

    //Mostrar atributos
    public function verPerfil(){
      echo "Nombre: " . $this -> nombre . "<br>";
      echo "Dorsal: " . $this -> dorsal . "<br>";
      echo "Edad: " . $this -> edad . "<br>";
    }

    //Decidir si es adulto
    public function adulto(){
      if ($this -> edad > 17) {
        echo "Es adulto.";
      } else {
        echo "Es menor.";
      }
    }

  }
 ?>
