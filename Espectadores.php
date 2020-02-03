<?php
//Clase Espectador, lleva todo lo relativo a la info del espectador @autor susifu

class Espectador{
    //propiedades
    private $_nombre;
    private $_edad;
    private $_dinero;

    //区切り-- Constructor
    public function __construct($nombre, $edad = null, $dinero = 0)
    {
        $this->_nombre = $nombre;
        $this->_edad = $edad;
        $this->_dinero = $dinero;
    }

    //区切り -- GET y SET Nombre
    public function setNombre($nombre){
        $this->_nombre = $nombre;

    }
    public function getNombre(){
       return  $this->_nombre;
    }
    //区切り --  GET y SET Edad
    public function setEdad($edad){
        $this->_edad =$edad;
    }

    public function getEdad(){
        return $this->_edad;
    }
    //区切り --  GET y SET Dinero
    public function setDinero($dinero){
        $this->_dinero =$dinero;
    }

    public function getDinero(){
      return  $this->_dinero;
    }

    /**pagar entrada
    *    @param $precio
    */

    public function pagar($precio){
       return $this->_dinero = $precio;

    }

    public function tieneEdad($edadMinima){
        return $this->_edad < $edadMinima;

    }

    public function tieneDinero($precioEntrada){
        return $this->_dinero > $precioEntrada;
    }

    public function info(){
        //imprime info del Espectador
    }


}


?>