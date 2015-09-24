<?php

/*Esta clase existe porque la clase que la hereda necesita ser instanciada;
 esta clase es abstracta porque no neccesita ser instanciada;
 el metodo abstracto index OBLIGA a que todas las clases que hereden de controller implementen un metodo index
 po OBLIGACION. De esta manera nos aseguramos de que siempre haya un MÉTODDO INDEX en todos nuestros controladores
que es el metodo que se va asignar por defecto cuando no se envie un metodo*/

abstract class Controller
{
    abstract public function index();
}

?>