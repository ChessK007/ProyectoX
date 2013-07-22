<?php

class actualiza_usuario extends ManejoBaseDatos {
    /* Variables Globales Privadas */

    private $id_asistente;
    private $nombre;
    private $apellido_pat;
    private $apellido_mat;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $pass;
    public $atributos = array(
        'nombre' => array(),
        'apellido_pat' => array(),
        'apellido_mat' => array(),
        'genero' => array(),
        'edad' => array(),
        'email' => array(),
        'nctrl_rfc' => array(),
        'pass' => array()
    );

    /* Constructor */

    public function actualiza_usuario() {
        parent::ManejoBaseDatos();
    }

    /* Obtener Valores */

    public function get_atributos() {
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key] = $this->$key;
        }
        return $rs;
    }

    public function get_id_asistente() {
        return $this->id_asistente;
        
    }

    public function get_nombre() {
        return $this->nombre;
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
        return $this->genero;
    }

    public function get_pass() {
        return $this->pass;
    }

    /* Asignar Valores */

    public function set_id_asistente($valor) {
        $this->id_persona = $valor;
    }

    public function set_nombre($valor) {
        $resp = $this->valida("nombre", $valor);    
        if ($resp) {
            $this->nombre = $valor;
        } else {
            echo "$valor esta mal en el campo NOMBRE <br>";
        }
        return resp;
    }

    public function set_apellido_pat($valor) {
        $resp = $this->valida("nombre", $valor);
        if ($resp) {
            $this->apellido_mat = $valor;
        } else {
            echo "$valor esta mal en el campo APELLIDO PAT <br>";
        }
        return resp;
    }

    public function set_apellido_mat($valor) {
        $resp = $this->valida("nombre", $valor);
        if ($resp) {
            $this->apellido_pat = $valor;
        } else {
             echo "$valor esta mal en el campo APELLIDO MAT <br>";
        }
        return resp;
    }

    public function set_email($valor) {
        $resp = $this->valida("email", $valor);
        if ($resp) {
            $this->email = $valor;
        } else {
             echo "$valor esta mal en el campo EMAIL <br>";
        }
        return resp;
    }

    public function set_genero($valor) {
        $resp = $this->valida("genero", $valor);
        if ($resp) {
            $this->genero = $valor;
        } else {
             echo "$valor esta mal en el campo GENERO <br>";
        }
        return resp;
    }

    public function set_edad($valor) {
        $resp = $this->valida("edad", $valor);
        if ($resp) {
            $this->edad = $valor;
        } else {
             echo "$valor esta mal en el campo EDAD <br>";
        }
        return resp;
    }
    
    public function set_nctrl_rfc($valor) {
        $resp = $this->valida("entero", $valor);
        if ($resp) {
            $this->nctrl_rfc = $valor;
        } else {
             echo "$valor esta mal en el campo EDAD <br>";
        }
        return resp;
    }

    public function set_pass($valor) {
        $resp = $this->valida("pass", $valor);
        if ($resp) {
            $this->pass = $valor;
        } else {
             echo "$valor esta mal en el campo  PASS <br>";
        }
        return resp;
    }

}
?>