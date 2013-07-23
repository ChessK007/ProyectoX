<?php

<<<<<<< HEAD
//include ('../libs/adodb5/adodb.inc.php');
include ('Validacion.php');
?>

<?php

class ManejoBaseDatos extends Validacion{
    
=======

class ManejoBaseDatos {

>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    private $db;

    function ManejoBaseDatos() {
<<<<<<< HEAD
        parent::Validacion();
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'proyectox');
        
    }
    
=======

        
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
<<<<<<< HEAD
        $this->db->Connect('localhost','root','','eventositc');
=======
        $this->db->Connect('localhost','root','','proyecto');
>>>>>>> a45a3d6bcbf529d57d7af05df1f79e72364c00d6
        }
    
    public function consulta_datos($em){
        $rs = "select * from " . $this->nombre_tabla . "where id = " . $em;
        /*$rs = $this->db->Execute('SELECT * from '.$this->nombre_tabla);*/
        $this->get_error($rs,'Error en consulta datos');
        return $rs;
    }
    
    public function consulta_existencia($email){
        $sql = 'select id_usuario_detalle from '. $this->nombre_tabla. ' where email=  '.$email;
        $rs= $this->db->Execute($sql);
        $this->get_error($rs,'error en la consulta');
       
        //echo "jfjd".$rs[1];
        return $rs;
    }
     
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    public function inserta($rs){
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        return $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
    }
    
    public function get_error($result,$tipo_error){
<<<<<<< HEAD
        if($result == false){
=======
        if($result === false){
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            die('Redireccionar a la pagina de error '.$tipo_error);
            return false;
        }else{
            return true;
        }
    }
<<<<<<< HEAD
    
    public function resetear_password($id) {
        if (is_integer($id)) {
            $sql = "select password from " . $this->nombre_tabla . "where id = " . $id;
            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['password'] = '1111';
            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->db->Execute($sql_update);
        } else {
            die('Verifica el ID');
=======
       


       

   


  

    public function resetear_password($email) {
        if (isset($_POST["email"])) {
            $x = "select email from " . $this->nombre_tabla . "where email = " . $email;
            if (strcmp($x, $email)) {
                $sql = "select email from " . $this->nombre_tabla . "where email = " . $email;
                $record = $this->db->Execute($sql);
                $rs = array();
                $rs['password'] = '1111';
                $sql_update = $this->db->GetUpdateSQL($record, $rs);
            } else {
                die('Verifica el tu Correo Electronico');
            }
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
        }
    }

//resetear

    
  
            


    public function actualiza($nombre_asistente, $apellido_paterno, $apellido_materno, $genero, $edad, $email, $nctrlrfc) {
        $id = "SELECT nctrl_rfc FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;
        $record = $this->db->Execute($id);
        if (strcmp($id, $nctrlrfc)) {
            $sql= "SELECT * FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;


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
        }
   
        else 
            {
            die('OJO ');
        }
    }


}
?>

