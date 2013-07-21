<?php

class Modelo extends Validacion{

    private $db;
    public $nombre_tabla;

    function Modelo($nombre_tabla) {
        
        parent::Validacion();
        $this->nombre_tabla = $nombre_tabla;
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'ProyectoX');
    }

    public function consulta_datos() {
        $rs = $this->db->Execute('SELECT * from ' . $this->nombre_tabla);
        $this->get_error($rs);
        return $rs;
    }

    
    public function get_error($result) {
        if ($result === false) {
            header ('');
        }
    }
}

?>
