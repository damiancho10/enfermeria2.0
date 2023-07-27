<?php



$aErrores = array();
$aRespuesta = array();

$nombre = $_POST["txtnombre"];
// si para indicar que si NO SE ENVIA ALGO VACIO muestre una alerta 
if(!empty($_POST)){
    echo"<h1> Formulario Enviado </h1>";
    if(empty($_POST["txtnombre"])){
        $aErrores[]="Debe ingresar un nombre";
    }else{
        $aRespuesta[]="Nombre Enviado:".$_POST["txtnombre"];
    }



}

?>