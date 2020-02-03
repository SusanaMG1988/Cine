<?php

Class Pelicula{
    private $_titulo;
    private $_duracion;
    private $_edadMin;
    private $_director;

    public function __construct($titulo, $duracion, $edadMinima, $director){
    
    
  
        
    }
    
    public function info(){
        //imprime información de la película
        $info = "{$this->_titulo} del director {$this->_director} ,
        duración {$this->_duracion} minutos. Edad {$this->_edadMin} años"; 
    }
}