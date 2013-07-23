<<<<<<< HEAD
=======

>>>>>>> 2ff753dafdfdbd0dd7968ed55469afbad06985f0
<?php

class ManejoBaseDatos {

    private $db;

    function ManejoBaseDatos() {
        
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
<<<<<<< HEAD
        $this->db->Connect('localhost','root','len21se13','eventositc');
        }
    
    public function consulta_datos($em){
        $rs = "select * from " . $this->nombre_tabla . "where id = " . $em;
        /*$rs = $this->db->Execute('SELECT * from '.$this->nombre_tabla);*/
        $this->get_error($rs,'Error en consulta datos');
        return $rs;
    }
     
    public function inserta($rs){
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        return $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
    }
    
    public function get_error($result,$tipo_error){
        if($result === false){
            die('Redireccionar a la pagina de error '.$tipo_error);
            return false;
        }else{
            return true;
        }
    }
    /* public function inserta($array) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $array);
        $this->get_error($this->db->Execute($sql_insert));
        return true;
    }*/
    
=======
        $this->db->Connect('localhost', 'root', '', 'EventosITC');
        if (db) {
            echo 'Chido';
        } else {
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

        $actual = mysqli_query($enlace, "call actualiza('$nombre_asistente','$apellido_paterno',
                                                        '$apellido_materno','$genero','$edad',
                                                        ,'$email','$nctrl_rfc')");
        if (!$actual) {
            echo "Error al guardar";
        } else {
            echo "Guardado con exito";
        }
        mysqli_close($enlace);
    }

    public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

>>>>>>> 2ff753dafdfdbd0dd7968ed55469afbad06985f0
    public function resetear_password($email) {
        if (isset($_POST["email"])) {
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
    }

//resetear

    public function get_error($result, $tipo_error) {
        if ($result === false) {

            return false; //No se hizo nada
        } else {
            return TRUE;
        }
<<<<<<< HEAD
    }  
  }//resetear
 
    
    public function actualiza($nombre_asistente,$apellido_paterno,
                                                        $apellido_materno,$genero,$edad,
                                                        $email,$nctrlrfc) {
        
        /*if (is_integer($id)) {
            $sql = "select * from " . $this->nombre_tabla . "where id = " . $id;
            $record = $this->db->Execute($sql);  
            $id = $this->get_id_asistente();
            /*$nombre_asistente= $this->get_nombre();
            $apellido_paterno= $this->get_apellido_pat();
            $apellido_materno =  $this->get_id_apellido_mat();
            $genero = $this->get_genero();
            $edad = $this->get_edad();
            $email= $this->get_email();
            $nctrl_rfc= $this->get_nctrl_rfc();*/
        /*    $actual = mysqli_query($enlace,"call actualiza($id,$nombre_asistente','$apellido_paterno',
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
       /* } else {
            die('OJO CON TU ID');
        }*/
        if(is_integer($email)){
            $sql = "SELECT * FROM  ".$this->nombre_tabla." 
                WHERE email = ".$email; 
            
            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['nombre_asistente'] = $nombre_asistente;
            $rs['apellido_paterno'] = $apellido_paterno;
            $rs['apellido_materno'] = $apellido_materno;
            $rs['genero'] = $genero;
            $rs['edad'] = $edad;
            $rs['email'] = $email;
            $rs['nctrlrfc'] = $nctrlrfc;
            $sql_update = $this->db->GetUpdateSQL($record,$rs);
            $this->get_error($this->db->Execute($sql_update),'Error al actualizar');
        }else{
            die('OJO ');
        }
    }
           
    
=======
    }

>>>>>>> 2ff753dafdfdbd0dd7968ed55469afbad06985f0
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

