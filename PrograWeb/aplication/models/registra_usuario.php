<?php

<<<<<<< HEAD
Class Usuario extends ManejoBaseDatos{
    public $nombre_tabla='evt_asistentes';
    
    public $atributos=array(
            'nombre_asistente'=>array(),
            'apellido_paterno'=>array(),
            'apellido_materno'=>array(),
=======
Class Usuario extends ManejorBaseDatos{
    private $id_asistente;
    private $nombre;
    private $apellido_pat;
    private $apellido_mat;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $pass;
    public $atributos=array(
            'nombre'=>array(),
            'apeliido_pat'=>array(),
            'apellido_mat'=>array(),
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            'genero'=>array(),
            'edad'=>array(),
            'email'=>array(),
            'nctrl_rfc'=>array(),
<<<<<<< HEAD
            'password'=>array(),
        
        
    );
    
    private $id_asistente;
    private $nombre_asistente;
    private $apellido_paterno;
    private $apellido_materno;
    private $genero;
    private $edad;
    private $email;
    private $nctrl_rfc;
    private $password;
    
=======
            'pass'=>array(),
    );
    
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    function Usuario(){
        parent::ManejoBaseDatos();
    }
    
    public function get_atributos(){
        $rs=array();
        foreach($this->atributos as $key=>$value){
            $rs[$key]=$this->$key;
        }
        return $rs;                
    }
    
    
    
    public function get_nombre(){
<<<<<<< HEAD
        return $this->nombre_asistente;
=======
        return $this->nombre;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    }
    
    public function set_nombre($valor){
        if($this->valida('nombre',$valor)){
<<<<<<< HEAD
            $this->nombre_asistente=$valor;
=======
            $this->nombre=$valor;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            return true;
        }else
            return false;
    }
    
    public function get_apellidoPat(){
<<<<<<< HEAD
        return $this->apellido_paterno;
=======
        return $this->apellido_pat;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    }
    
    public function set_apellidoPat($valor){
        if($this->valida('nombre',$valor)){
<<<<<<< HEAD
            $this->apellido_paterno=$valor;
=======
            $this->apellido_pat=$valor;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            return true;
        }else
            return false;
    }
    
    public function get_apellidoMat(){
<<<<<<< HEAD
        return $this->apellido_materno;
=======
        return $this->apellido_mat;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
    }
    
    public function set_apellidoMat($valor){
        if($this->valida('nombre',$valor)){
<<<<<<< HEAD
            $this->apellido_materno=$valor;
=======
            $this->apellido_mat=$valor;
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            return true;
        }else
            return false;
    }
    
    public function get_genero(){
        return $this->genero;
    }
    
    public function set_genero($valor){
        if($this->valida('nombre',$valor)){
            $this->genero=$valor;
            return true;
        }else
            return false;
    }
    
    public function get_edad(){
        return $this->edad;
    }
    
    public function set_edad($valor){
        if($this->valida('entero',$valor)){
            $this->edad=$valor;
            return true;
        }else
            return false;
    }
    
    public function get_email(){
        return $this->email;
    }
    
    public function set_email($valor){
        if($this->valida('email',$valor)){
            $this->email=$valor;
            return true;
        }else
            return false;
    }
    
    public function get_nctrl(){
        return $this->nctrl_rfc;
    }
    
    public function set_nctrl($valor){
        if($this->valida('entero',$valor)){
            $this->nctrl_rfc=$valor;
            return true;
        }else
            return false;
    }
    
    public function get_password(){
<<<<<<< HEAD
        return $this->password;
    } 
    
    public function set_password($valor){
        if($this->valida('pass',$valor)){
            $this->password= md5($valor);
=======
        return $this->pass;
    } 
    
    public function set_password($valor){
        if($this->valida_er('pass',$valor)){
            $this->pass= md5($valor);
>>>>>>> dc8d99acf13dd13c785e27bbadc884ea5103ef1f
            return true;
        }else
            return false;
        
        
    }
}
?>
