<?php
if (isset($_POST["pais"])) {
    $pais = $_POST["pais"];
    $temp = $_POST["temp"];
    $tempMax = $_POST["tempMax"];
    $tempMin = $_POST["tempMin"];
    $viento = $_POST["viento"];
    $description = $_POST["description"];

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "prueba";

    $conexion = mysqli_connect($servidor, $usuario, $password, $dbname);

    if (!$conexion) {
        echo "Error en la conexion a MySQL: " . mysqli_connect_error();
        exit();
    }
    $sql = "INSERT INTO prueba (pais,temp,tempMax,tempMin,viento,description) VALUES ('" .$pais."', '" .$temp."','" .$tempMax."','" .$tempMin ."','" .$viento."','" .$description."')";
    if (mysqli_query($conexion, $sql)) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>