<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Colegio de Podólogos de Entre Ríos">
    <title>Colegio de Podólogos de Entre Ríos</title>
    <link rel="shortcut icon" href="../images/logo-184x184.jpg" type="image/x-icon">
</head>
<?php
// include_once 'acceso.php';

extract($_POST, EXTR_OVERWRITE);
if (isset($_POST['libro'])) {
    $path = "assets/libros/" . $_POST['libro'] . ".pdf";
    header("Content-type:application/pdf");
    header("Content-Disposition:inline; filename='" . $_POST['libro'] . ".pdf'");
    readfile($path);
} else {
    header("location: index.php");
}
