<?php
Class Cine{
    private $_butacas;
    private $_precio;
    private $_pelicula;
    private $_filas;
    private $_columnas;
    //private $_rellenarButacas

    public function __construct($filas, $columnas, $precio, Pelicula $pelicula)
    {
        $this->_filas = $filas;
        $this->_columnas = $columnas;
        $this->_precio = $precio;
        $this->_pelicula = $pelicula;
    }
    //setters y getters

    //FILAS
    public function setFilas($filas){
        $this->_filas = $filas;
    }
    public function getFilas(){
        return $this->_filas;
    }
    //COLUMNAS
    public function setColumnas($columnas){
        $this->_columnas = $columnas;
    }
    public function getColumnas(){
        return $this->_columnas;
    }
    //PRECIO
    public function setPRecio($precio){

    }

    public function llenarArrayConButacas(){
        for($i = 0; $i< $this->_filas;$i++){
            for($j = 0; $j < $this->_columnas;$j++){
                $this->_butacas[$i][$j] = new Butaca($i+1, $j+1);
            }
        }
    }

    public function _rellenarButaca(){
        $fila = $this->_filas;
        for($i = 0; $i< $this->_filas;$i++){
            $letra = 'A';
            for($i = 0; $i< $this->_filas;$i++){

            }
        }

    }
}



?>