<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Model.php
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
