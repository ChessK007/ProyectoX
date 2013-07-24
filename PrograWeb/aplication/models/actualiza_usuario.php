<?php

class actualiza_usuario extends Modelo {
     public $nombre_tabla = 'evt_asistentes';
     public $pk = 'id';
     public $atributos = array(
        'nombre_asistente' => array(),
        'apellido_paterno' => array(),
        'apellido_materno' => array(),
        'genero' => array(),
        'edad' => array(),
        'email' => array(),
        'nctrl_rfc' => array(),
        'password' => array()
    );

    private $nombre_asistente;
    private $apellido_pat;
    private $apellido_mat;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $pass;
   

    /* Constructor */

    public function actualiza_usuario() {
       parent::Modelo();
    }

    /* Obtener Valores */

    public function get_atributos() {
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key] = $this->$key;
        }
        return $rs;
    }


    public function get_nombre_asistente() {
        return $this->nombre_asistente;
    }

    public function get_apellido_pat() {
        return $this->apellido_pat;
    }

    public function get_id_apellido_mat() {
        return $this->apellido_mat;
    }

    public function get_email() {
        return $this->email;
    }

    public function get_genero() {
        return $this->genero;
    }

    public function get_edad() {
        return $this->edad;
    }
    
    public function get_nctrl_rfc() {
        return $this->nctrl_rfc;
    }

    public function get_pass() {
        return $this->pass;
    }
    
    public function set_nombre_asistente($valor){
        $this->nombre_asistente = $valor;
    }
    
    public function set_apellido_pat($valor){
        $this->apellido_pat = $valor;
    }
    
    public function set_apellido_mat($valor){
        $this->apellido_mat = $valor;
    }
    
    public function set_email($valor){
        $this->email = $valor;
    }
    
    public function set_genero($valor){
        $this->genero = $valor;
    }
    
    public function set_edad($valor){
        $this->edad = $valor;
    }
    
    public function set_nctrl_rfc($valor){
        $this->nctrl_rfc= $valor;
    }
    
    public function set_pass($valor){
        $this->pass= $valor;
    }

}
?>