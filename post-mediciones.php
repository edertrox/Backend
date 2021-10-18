<?php

$valor = $_POST['valor'];
$latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
$fecha = $_POST['fecha'];


$serverName = "localhost";
$userName = "root";
$password = "";
$dbNombre = "database_biometria";

$conn = mysqli_connect($serverName, $userName, $password, $dbNombre);

$stmt = $conn->prepare("insert into mediciones(valor, latitud, longitud, fecha) values(?, ?, ?, ?)");
$stmt->bind_param("ssss", $valor, $latitud, $longitud, $fecha);
$stmt->execute();
echo '<script>
    alert("Los datos se han subido a la base de datos");
    window.history.go(-1);
    location.reload();
    </script>
    ';
$stmt->close();
$conn->close();

?>
