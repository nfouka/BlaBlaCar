<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Psr\Cli;

/**
 * Description of DB2
 *
 * @author nadir
 */
class DB2 {
    //put your code here
    
    
    private $DB ;
    
    function getDB() {
        return $this->DB;
    }

    function setDB($DB) {
        $this->DB = $DB;
    }

    function __construct( DB $DB) {
        $this->DB = $DB;
    }

}
