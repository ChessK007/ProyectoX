<?php
include ('../libs/adodb5/adodb.inc.php');
<<<<<<< HEAD
include ('Validacion.php');
?>

<?php
=======
>>>>>>> 21efca02226d6ff4db988016848394854540d199

class ManejoBaseDatos {
    
    private $db;
    
    
    function ManejoBaseDatos() {
        parent::Validacion();
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'EventosITC');
        if(db){
            echo 'Chido';
        }else{
            echo $db;
        }
        
        $id_asistentes = $_POST["id_asistentes"];
        $nombre_asistente = $_POST["nombre_asistente"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $genero = $_POST["genero"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];
        $nctrl_rfc = $_POST["nctrl_rfc"];
        $password = $_POST["password"];
        
        $actual = mysqli_query($enlace,"call actualiza('$nombre_asistente','$apellido_paterno',
                                                        '$apellido_materno','$genero','$edad',
                                                        ,'$email','$nctrl_rfc')");
        if (!$actual){
            echo "Error al guardar";
            }
            else{echo "Guardado con exito";}
        mysqli_close($enlace);
<<<<<<< HEAD
    }
    
    public function inserta($rs){
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        return $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
    }
=======
        
    }   
>>>>>>> 21efca02226d6ff4db988016848394854540d199
    
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
  
   public function get_error($result,$tipo_error){
               if($result === false){
                   
                   return false;//No se hizo nada
               }else{
                   return TRUE;
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

