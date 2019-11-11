<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of aerolinea_controller
 *
 * @author Sergio
 */
include '../Modelo/aerolinea.php';;
include '../repo/aerolinea_repo.php';
class aerolinea_controller {
     function save($aerolinea) {
        $repositorio = new aerolinea_repo;

$repositorio->save($aerolinea);
print_r($aerolinea);

    }
}
$controller= new aerolinea_controller();
$aerolinea= new aerolinea;
$aerolinea ->setNit($_POST ['Nit']);
$aerolinea ->setNombre($_POST ['nombre']);
$controller->save($aerolinea);
