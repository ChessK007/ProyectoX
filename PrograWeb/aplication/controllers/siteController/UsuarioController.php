
    <?php


    class UsuarioController extends actualiza_usuario {

        function UsuarioController() {
        }

        public function registrausuario($valores) {
            parent::actualiza_usuario();
            $this->set_nombre($valores['nombre']);
            $this->set_apellido_pat($valores['apellido_paterno']);
            $this->set_apellido_mat($valores['apellido_materno']);
            $this->set_email($valores['email']);
            $this->set_genero($valores['genero']);
            $this->set_edad($valores['edad']);
            $this->set_email($valores['email']);
            $this->set_nctrl_rfc($valores['nctrl_rfc']);
            $this->set_pass($valores['password']);
           /* return $rs = $this->inserta($this->get_atributos());*/
            /*return $rs = $this->consulta_datos($this->get_email());*/
            return $rs = $this->actualiza($this->get_nombre(),$this->get_apellido_pat(),  $this->get_id_apellido_mat(),  $this->get_genero(),
            $this->get_edad(), $this->get_email(), $this->get_nctrl_rfc());
        }
        
              
        /*$actual = mysqli_query($enlace,"call actualiza('$id_asistente','$nombre_asistente','$apellido_paterno',
                                                        '$apellido_materno','$genero','$edad',
                                                        ,'$email','$nctrl_rfc')");
        if (!$actual){
            echo "Error al guardar";
            }
            else{echo "Guardado con exito";}
        mysqli_close($enlace);*/
        
    }
    ?>