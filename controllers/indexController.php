<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        /*** TRUCO para pasar un parametro desde este archivo a la vista***/
        //echo 'Hola desde la pagina principal';
        $this->_view->titulo = 'Portada desde la página principal';
        $this->_view->renderizar('index','inicio');
    }
}

?>