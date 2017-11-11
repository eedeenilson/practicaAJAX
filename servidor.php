<?php

$vector = array();
$usuario = array();

$usuario['usr']="administrador";
$usuario['pss']="administrador";

$vector = array();
if (isset($_POST['usr']) && isset($_POST['pss']))
 {
  $login = $_POST['usr'];
  $pass = $_POST['pss'];
  $vector['mensaje'] = "no coincide";

  if ($login == $user['usr'] && $pass==$user['pss'])
   {
    # code...
    $vector['mensaje'] = "coincide";
}
}
echo json_encode($vector);
 ?>
