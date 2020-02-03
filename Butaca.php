<?php
Class Butaca{
    /**
    * propiedades 
    * @var Char $_letra
    * @var Int $_fila Integer
    * @var Espectador $_espectador
    */
    private $_fila;
    private $_letra;
    private $_espectador;

    //constructor
    public function __construct($fila, $letra){
        $this->_fila = $fila;
        $this->_letra = $letra;
        $this->_espectador = null;
    }

    //Getters y setters 区切り:

    //FILA
    public function setFila($fila){
        $this->_fila = $fila;
    }
    public function getFila(){
        return $this->_fila;
    }
    //LETRA
    public function setLetra($letra){
        $this->_letra = $letra;
    }
    public function getLetra(){
        return $this->_letra;
    }
    //espectador
    public function setespectador(Espectador $espectador){
        $this->_espectador = $espectador;
    }
    public function getespectador(){
        return $this->_espectador;
    }

    //metodos

    public function ocupado(){
        return !is_null($this->_espectador);
    }

    public function getInfo(){
        //imprime informació3n del asiento
    }

}


?>