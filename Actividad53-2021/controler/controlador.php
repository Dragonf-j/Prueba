<?php
    require_once("models/empleados.php");
    $emp = new empleados();
    $dato = $emp->getDatos();
    /* if(isset($_REQUEST['anadir'])){
       $dat= $emp -> anadir($datos);  
    } */
    require_once('views/vista.php');
?>