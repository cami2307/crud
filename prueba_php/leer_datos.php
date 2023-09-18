<?php

$conexion = new mysqli('localhost','root','','prueba_datos');

if ($conexion->connect_errno){
    die('lo siento hubo un problema en la conexion');
}else{
    $sql = "select * from usuarios";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows){
        while($fila = $resultado->fetch_assoc()){

        echo $fila ['ID'].' '. $fila ['nombre']. '<br/>';
    }
}else{
    echo 'no hay datos';
}

}

?>