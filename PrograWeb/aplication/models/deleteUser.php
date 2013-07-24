<?php
  class deleteUser extends Modelo{
      public $nombre_tabla='evt_asistentes';
      public $pk = 'id';
      public $atributos = array(
        
        'apellido_paterno' => array(),
        'apellido_materno' => array(),
        'nombre'=>array(),  
        'sexo' => array(),
        'edad' => array(),
        'email' => array(),
        'nctrl_rfc' => array(),
        'password'=>array() 
        
    );
      
    private $nombre_asistente;
    private $apellido_pat;
    private $apellido_mat;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $pass;
    
     public function deleteUser() {
       parent::ManejoBaseDatos();
    }
    
    public function get_atributos() {
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key] = $this->$key;
        }
        return $rs;
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
