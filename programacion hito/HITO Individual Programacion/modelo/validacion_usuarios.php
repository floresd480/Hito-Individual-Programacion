<?php

$usuario =$_POST['usuario'];
$contraseña =$_POST['contraseña'];
$opinion =$_POST['opinion'];
$fecha =$_POST['fecha'];
$usuario =$_POST['imagen'];

//con esta informacion se le pide al usuario que ingrese sus datos y se guarde la informacion

if (empty($usuario) || empty($contraseña) || empty($opinion) || empty($fecha)) {
    
    echo "Es necesario completar todos los campos.";
  } else 



  $conexion = mysqli_connect("localhost", "usuario", "contraseña", "basedatos");
  $query = "INSERT INTO entradas (usuario, contraseña, opinion, fecha, imagen) VALUES ('$usuario', '$contraseña', '$contenido', '$fecha', '$imagen')";
  mysqli_query($conexion, $query);



?>