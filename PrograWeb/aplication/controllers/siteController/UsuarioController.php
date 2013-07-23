
    <?php


    class UsuarioController extends actualiza_usuario {

        function UsuarioController() {
        }

        public function registrausuario($valores) {
            parent::actualiza_usuario();
            $this->set_nombre_asistente($valores['nombre_asistente']);
            $this->set_apellido_pat($valores['apellido_paterno']);
            $this->set_apellido_mat($valores['apellido_materno']);
            $this->set_email($valores['email']);
            $this->set_genero($valores['genero']);
            $this->set_edad($valores['edad']);
            $this->set_email($valores['email']);
            $this->set_nctrl_rfc($valores['nctrl_rfc']);
            return $rs = $this->actualiza($this->get_nombre_asistente(),$this->get_apellido_pat(),  $this->get_id_apellido_mat(),  $this->get_genero(),
            $this->get_edad(), $this->get_email(), $this->get_nctrl_rfc());
        }
       
    }
    ?>