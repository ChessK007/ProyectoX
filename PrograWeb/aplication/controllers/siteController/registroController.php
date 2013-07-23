<?php
class RegistroController extends Usuario{
    
    function RegistroController(){
        
    }
    
    public function registraUsuario($valores){
        parent::Usuario();
        if($this->set_nombre($valores['nombre_asistente'])){
            if($this->set_apellidoPat($valores['apellido_paterno'])){
                if($this->set_apellidoMat($valores['apellido_materno'])){
                    if($this->set_genero($valores['genero'])){
                        if($this->set_edad($valores['edad'])){
                            if($this->set_email($valores['email'])){
                                if($this->set_nctrl($valores['nctrl_rfc'])){
                                    if($this->set_password($valores['password'])){
                                        return $this->inserta($this->get_atributos());
                                    } die("Contraseña incorrecta");                                
                                }die("Num control o RFC incorrecta");
                            }die("Email incorrecto");
                        }die("Edad incorrecta");
                    }die("Genero incorrecto");
                }die("Apellido Paterno incorrecto");
            }die("Apellido Materno incorrecto");
        }die("Nombre incorrecto");
    }
}

?>
