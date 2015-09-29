<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Model.php
 * La clase model va a extender todos nuestros modelos.
 * -------------------------------------
 */


class Model
{
    protected $_db;
    
    public function __construct() {
        $this->_db = new Database();
    }
}

?>
