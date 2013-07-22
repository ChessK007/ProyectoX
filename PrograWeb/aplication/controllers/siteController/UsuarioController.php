<pre>
    <?php


    class UsuarioController extends actualiza_usuario {

        function UsuarioController() {
            
        }

        public function registrausuario($atributos) {
            parent::actualiza_usuario();
            $this->set_nombre($atributos['nombre']);
            $this->set_apellido_pat($atributos['apellido_paterno']);
            $this->set_apellido_mat($atributos['apellido_materno']);
            $this->set_email($atributos['email']);
            $this->set_genero($atributos['genero']);
            $this->set_edad($atributos['edad']);
            $this->set_edad($atributos['email']);
            $this->set_edad($atributos['nctrl_rfc']);
            $this->set_pass($atributos['password']);
            return $rs = $this->inserta($this->get_atributos());
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
</pre>