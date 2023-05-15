<?php
$nombre=$_GET["nombre"]?? null;
$apellido=$_GET["apellido"]?? null;
$direccion=$_GET["direccion"]?? null;
$telefono=$_GET["telefono"]?? null;
$correo=$_GET["correo"]?? null;
$sexo=$_GET["sexo"] ?? null;
$fecha=$_GET["fecha"]?? null;

$cont=0;
include("cn.php");

$q=mysqli_query($c,"INSERT INTO usuarios(id, nombre, apellido, direccion, telefono, correo, sexo, fecha) VALUES ('NULL','$nombre', '$apellido', '$direccion', '$telefono', '$correo', '$sexo', '$fecha')");

if($q){
    echo "Registro insertado exitoso";
}
else{
    echo "Fallo en el registro";
}
?>