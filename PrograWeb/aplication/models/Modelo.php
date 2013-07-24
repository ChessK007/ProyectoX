<?php

//include ('../libs/adodb5/adodb.inc.php');
include ('Validacion.php');
?>

<?php

class Modelo extends Validacion {

    private $db;

    function Modelo() {
        parent::Validacion();
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'eventositc');
    }

    public function consulta_datos($em) {
        $rs = "select * from " . $this->nombre_tabla . "where id = " . $em;
        /* $rs = $this->db->Execute('SELECT * from '.$this->nombre_tabla); */
        $this->get_error($rs, 'Error en consulta datos');
        return $rs;
    }

   
//echo "jfjd".$rs[1];
    
    public function consulta_existencia($sql){
        //$sql = 'select id_usuario_detalle from '. $this->nombre_tabla. ' where email=  '.$email;
        $rs= $this->db->Execute($sql);
        $this->get_error($rs,'error en la consulta');
       
        //echo "jfjd".$rs[1];
        return $rs;
    }

    public function inserta($rs) {
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla, $rs);
        return $this->get_error($this->db->Execute($sql_insert), 'Error en Modelo.inserta');
    }

    public function get_error($result, $tipo_error) {
        if ($result == false) {
            if ($result === false) {
                die('Redireccionar a la pagina de error ' . $tipo_error);
                return false;
            } else {
                return true;
            }
        }
    }

    public function resetear_password($email) {
            $x = "select email from " . $this->evt_asistentes . "where email = " . $email;
            if (strcmp($x, $email)) {
                $sql = "select email from " . $this->evt_asistentes . "where email = " . $email;
                $record = $this->db->Execute($sql);
                $rs = array();
                $rs['password'] = '1111';
                $sql_update = $this->db->GetUpdateSQL($record, $rs);
            } else {
                die('Verifica el tu Correo Electronico');
            }
        
    }

//resetear






    public function actualiza($nombre_asistente, $apellido_paterno, $apellido_materno, $genero, $edad, $email, $nctrlrfc) {
        $id = "SELECT nctrl_rfc FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;
        $record = $this->db->Execute($id);
        if (strcmp($id, $nctrlrfc)) {
            $sql = "SELECT * FROM  " . $this->nombre_tabla . " WHERE nctrl_rfc = " . $nctrlrfc;


            $record = $this->db->Execute($sql);
            $rs = array();
            $rs['nombre_asistente'] = $nombre_asistente;
            $rs['apellido_paterno'] = $apellido_paterno;
            $rs['apellido_materno'] = $apellido_materno;
            $rs['genero'] = $genero;
            $rs['edad'] = $edad;
            $rs['email'] = $email;
            $rs['nctrlrfc'] = $nctrlrfc;

            $sql_update = $this->db->GetUpdateSQL($record, $rs);
            $this->get_error($this->db->Execute($sql_update), 'Error al actualizar');
        } else {
            die('Verifica tu Nctrl_RFC el que ingresaste no existe: ' . $nctrlrfc);
        }
    }

}
?>

