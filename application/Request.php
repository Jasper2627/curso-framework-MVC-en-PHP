<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Request.php
 * Procesa la petición 
 * -------------------------------------
 */

class Request
{
    private $_controlador;
    private $_metodo;
    private $_argumentos;

    public function __construct(){
        if(isset($_GET['url'])){
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            //explode() va a meter los elementos de mi url en un array
            $url = explode('/', $url);
            //array_filter va eliminar todos los elementos de la url que no sean válidos
            $url = array_filter($url);

            $this->_controlador = strtolower(array_shift($url));
            $this->_metodo = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }    

        if (!$this->_controlador) {
            $this->_controlador = 'index';
        }

        if (!$this->_metodo) {
            $this->_metodo = 'index';
        }

        if (!isset($this->_argumentos)) {
            $this->_argumentos = array();
        }
    }

    public function getControlador()
    {
        return $this->_controlador;
    }

    public function getMetodo()
    {
        return $this->_metodo;
    }

    public function getArgs()
    {
        return $this->_argumentos;
    }

}
?>