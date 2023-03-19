<?php

if (!empty($_POST['nombre']) AND !empty($_POST['password']) ) {

    require_once("class_usuarios.php");
    $usuario = new Usuario();
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

   

    $recordset = $usuario->getUserByPassword($nombre, $password);

    $numfilas = $recordset->num_rows;

    if ($numfilas <> 0){
        header("Location:../pag/xml.php");
    }else{
        echo 'Usuario no existe';
        header("Location:../controlador/login.php");

    }


} else{
    header("Location:../controlador/login.php");
}

?>