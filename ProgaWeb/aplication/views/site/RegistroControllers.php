<?php
  include("../../models/Modelo.php");
  include('../../models/Usuarios.php');
  include('../../libs/adodb5/adodb-pager.inc.php');
  include('../../libs/adodb5/adodb.inc.php');
  
  $usuario = new Usuarios();
  //print_r($_POST);
  //$usuario->set_nombre($_POST['nombre']);
  //$usuario->set_email($_POST['email']);
  //$usuario->set_password($_POST['password']);
  //print_r($usuario->get_atributos());
  //$usuario -> inserta($usuario->get_atributos());
  //$usuario->actualiza(1);
  //$usuario->elimina();
  //$usuario->inserta();
  //$usuario->inserta();
  $rs=$usuario->consulta_datos();
  print_r($rs->GetRows());
?>