<?php
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
