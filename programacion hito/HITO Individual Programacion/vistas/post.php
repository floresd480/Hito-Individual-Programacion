<?php
require_once("../Modelo/class_post.php");
$post = new post();
$recordset = $post->getPosts();


while($fila = mysqli_fetch_array($recordset)){
    echo '<section class="pagina_contacto">';
    echo "<div>";
    echo "<h1>".$fila['titulo']."</h1>";
    echo "<h3>".$fila['email'], $fila['fecha']."</h3>";
    echo "<p>".$fila['contenido']."</p>";
    echo "<p>".$fila['imagen']."</p>";
    echo '<form action="../Modelo/controlador_comercial.php?id='.$fila['idcomercializadora'].'" method="post">
    <input type="hidden" class="form-control" id="acction" name="acction" value="modificar">
    <button type="submit" class="btn btn-primary">Editar</button>
    </form>';
    echo '<form action="../Modelo/controlador_comercial.php?id='.$fila['idcomercializadora'].'" method="post">
    <input type="hidden" class="form-control" id="acction" name="acction" value="borrar">
    <button type="submit" class="btn btn-danger">Borrar</button>
    </form>';
    echo "</div>";
    echo "</section>";
}


?>