<?php

//include ('../libs/adodb5/adodb.inc.php');
include ('Validacion.php');
?>

<?php

class ManejoBaseDatos extends Validacion{
    
    private $db;
    
    
    function ManejoBaseDatos() {
        parent::Validacion();
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'proyectox');
        
    }
    
    public function inserta($rs){
        $sql_insert = $this->db->GetInsertSQL($this->nombre_tabla,$rs);
        return $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
    }
    
    public function get_error($result,$tipo_error){
        if($result == false){
            die('Redireccionar a la pagina de error '.$tipo_error);
            return false;
        }else{
            return true;
        }
    }
    
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
