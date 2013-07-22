<?php

class ManejoBaseDatos extends Validacion {
    
    private $db;
    
    
    function ManejoBaseDatos() {
        parent::Validacion();
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', 'len21se13', 'ProyectoX');
        if(db){
            echo 'Chido';
        }else{
            echo $db;
        }
               
    }   
    
     public function inserta($array) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $array);
        $this->get_error($this->db->Execute($sql_insert));
        return true;
    }
    
    public function resetear_password($email) {
        if(isset($_POST["email"]))
    {
        if (is_integer($email)) {
            $sql = "select password from " . $this->nombre_tabla . "where id = " . $email;
            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['password'] = '1111';
            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            
        } else {
            die('Verifica el tu Correo Electronico');
        }
    }  
  }//resetear
  
   public function get_error($result) {
        if ($result === false) {
            header ('Location: registroFallido.php');
        }
    }
    
    public function actualiza($id) {
        if (is_integer($id)) {
            $sql = "select * from " . $this->nombre_tabla . "where id = " . $id;
            $record = $this->db->Execute($sql);  
            
            $actual = mysqli_query($enlace,"call actualiza($id,$nombre_asistente','$apellido_paterno',
                                                        '$apellido_materno','$genero','$edad',
                                                        ,'$email','$nctrl_rfc')");
        if (!$actual){
            echo "Error al guardar";
            }
            else{echo "Guardado con exito";}
                    mysqli_close($enlace);
           /* $rs = array();*/
           /* $rs['nombre'] = 'Pedro';*/
            /*$sql_update = $this->db->GetUpdateSQL($record, $rs);*/
            /*$this->db->Execute($sql_update);*/
        } else {
            die('OJO CON TU ID');
        }
    }
           
    
    public function resibe($id) {
        if (is_integer($id)) {
            $sql = "select * from " . $this->nombre_tabla . "where id = " . $id;
            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['password'] = '1111';
            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->db->Execute($sql_update);
        } else {
            die('Verifica el ID');
        }
    }
    
}
?>

