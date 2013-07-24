<?php
include('../../views/layouts/header.php');
include('../../models/Modelo.php');
include('../../libs/adodb5/adodb.inc.php');

    Class Aceptacion extends Modelo {
        
        public function Aceptacion() {
        $m= new Modelo();
        if(isset($_POST['email'])){
        $m->resetear_password($_POST['email']);
        $res=$this->db -> Execute($sql_update);
        if($res){
            echo "<h1>El Reseteo se logro exitosamente</h1>";
            }
        }
       } 
    }
 ?>   
<a href="../../views/bootstrap/formularios/_form_reset_password.php"><button type="button" id="siguient" class="btn btn-danger">Salir</button></a>

