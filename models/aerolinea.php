<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aerolinea
 *
 * @author Sergio
 */
class aerolinea {
      private $nombre;
    private $nit;
    
    function __construct() {
     
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getNit() {
        return $this->nit;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setNit($nit) {
        $this->nit = $nit;
    }

}
