<?php
<<<<<<< HEAD
include('../../views/layouts/header.php');
include('../../models/ManejoBaseDatos.php');
include('../../libs/adodb5/adodb.inc.php');


=======
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    Class Aceptacion extends ManejoBaseDatos {
        
        public function Aceptacion() {
        $m= new ManejoBaseDatos();
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
<<<<<<< HEAD
<a href="../../views/bootstrap/formularios/_form_reset_password.php"><button type="button" id="siguient" class="btn btn-danger">Salir</button></a>
=======
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
