<?php
include('../../views/layouts/header.php');
include('../../models/ManejoBaseDatos.php');
?>


 
<?php
    Class Aceptacion extends ManejoBaseDatos {
        
        public function Aceptacion() {
        $m= new ManejoBaseDatos();
        if(isset($_POST['email'])){
        $m->resetear_password($_POST['email']);
        $res=$this->db -> Execute($sql_update);
        if($res){
            echo "<html>
                    <h4>El Reseteo se logro exitosamente</h4>
                    </html>";
            }
        }
       } 
    }
 ?>   
<button type="button" id="siguient" class="btn btn-danger"><a href="../../views/bootstrap/formularios/_form_reset_password.php"></a>Salir</button>