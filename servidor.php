<?php

$vector = array();
$usuario = array();

$usuario['usr']="administrador";
$usuario['pss']="administrador";

$data = file_get_contents('php://input');
// Los convertimos en un array
$data = json_decode( $data, true );

$login = $data['usr'];
$pass = $data['pss'];

$vector['mensaje'] = "no coincide";


  if ($login == $usuario['usr'] && $pass==$usuario['pss'])
   {

    $vector['mensaje'] = "coincide";
}

echo json_encode($vector);
 ?>
