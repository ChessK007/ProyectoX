<?php


class ManejoBaseDatos {

    private $db;

    function ManejoBaseDatos() {

        
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost','root','','proyecto');
        }
    
    public function consulta_datos($em){
        $rs = "select * from " . $this->nombre_tabla . "where id = " . $em;
        /*$rs = $this->db->Execute('SELECT * from '.$this->nombre_tabla);*/
        $this->get_error($rs,'Error en consulta datos');
        return $rs;
    }
    
    public function consulta_existencia($email){
        $rs = "select * from". $this->nombre_tabla. "where email= ".$email;
        return $rs;
        print_r($rs->getRows());
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
       
=======

        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', 'len21se13', 'eventositc');
    }

    public function consulta_datos($em) {
        $rs = "select * from " . $this->nombre_tabla . "where id = " . $em;
        /* $rs = $this->db->Execute('SELECT * from '.$this->nombre_tabla); */
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

    public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

    public function get_error($result, $tipo_error) {
        if ($result === false) {
            die('Redireccionar a la pagina de error ' . $tipo_error);
            return false;
        } else {
            return true;
        }
    }

>>>>>>> 997be997464079abb1b061dd029237c078288e44
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
<<<<<<< HEAD
    
    public function actualiza($nombre_asistente,$apellido_paterno,
                                                        $apellido_materno,$genero,$edad,
                                                        $email,$nctrlrfc) {
        $id = "SELECT nctrl_rfc FROM  ".$this->nombre_tabla." WHERE nctrl_rfc = ".$nctrlrfc;
        $record = $this->db->Execute($id);
        if(strcmp($id, $nctrlrfc)){
            $sql = "SELECT * FROM  ".$this->nombre_tabla." WHERE nctrl_rfc = ".$nctrlrfc; 
            
=======

    public function actualiza($nombre_asistente, $apellido_paterno, $apellido_materno, $genero, $edad, $email, $nctrlrfc) {
        $id = "SELECT nctrl_rfc FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;
        $record = $this->db->Execute($id);
        if (strcmp($id, $nctrlrfc)) {
            $sql= "SELECT * FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;

>>>>>>> 997be997464079abb1b061dd029237c078288e44
            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['nombre_asistente'] = $nombre_asistente;
            $rs['apellido_paterno'] = $apellido_paterno;
            $rs['apellido_materno'] = $apellido_materno;
            $rs['genero'] = $genero;
            $rs['edad'] = $edad;
            $rs['email'] = $email;
            $rs['nctrlrfc'] = $nctrlrfc;
<<<<<<< HEAD
            $sql_update = $this->db->GetUpdateSQL($record,$rs);
            $this->get_error($this->db->Execute($sql_update),'Error al actualizar');
        }else{
            die('OJO ');
        }
    }
           
=======
            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->get_error($this->db->Execute($sql_update), 'Error al actualizar');
        } else {
            die('OJO ');
        }
    }

>>>>>>> 997be997464079abb1b061dd029237c078288e44
}
?>

