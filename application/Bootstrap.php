<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Bootstrap.php
 * Hace la llamada de los métodos y los controladores
 * -------------------------------------
 */


class Bootstrap
{

    public static function run(Request $peticion)
    {
        $controller = $peticion->getControlador() . 'Controller';
        $rutaControlador = ROOT . 'controllers' . DS . $controller . '.php';
		/*echo $rutaControlador; exit();*/
        $metodo = $peticion->getMetodo();
        $args = $peticion->getArgs();
        
        if(is_readable($rutaControlador)){
            require_once $rutaControlador;
            $controller = new $controller;
            
            if(is_callable(array($controller, $metodo))){
                $metodo = $peticion->getMetodo();
            }
            else{
                $metodo = 'index';
            }
             
            if(isset($args)){
/*              call_user_func_array(array($controller, $metodo), $args);*/
				call_user_func(array($controller, $metodo));
            }
            else{
                call_user_func(array($controller, $metodo));							  
            }
           
        } else {
            throw new Exception('no encontrado');
        }
		// throw new Exception genera una excepción para ejecutarse en index a través de catch
    }
}

?>