<?php

Class TipoUsuarios {

    private $id_tipo_usuario;
    private $tipo_usuario;

    public function get_id_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    public function set_id_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    public function get_tipo_usuario() {
        return $this->tipo_usuario;
    }

    public function set_tipo_usuario($tipo_usuario) {
        $this->tipo_usuario = $tipo_usuario;
    }

}

?>
