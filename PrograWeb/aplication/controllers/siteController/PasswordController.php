<?php

class PasswordController extends actualiza_usuario {

    function PasswordController() {
        
    }

    public function registrausuario($valores) {
        parent::actualiza_usuario();

        $this->set_email($valores['email']);

        return $rs = $this->resetear_password($this->get_email());
    }

}

?>
