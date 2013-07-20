<?php

Class EventosTiposUsuarios {

    private $id_evento_tipo_usuario;
    private $id_evento;
    private $id_tipo_usuario;

    public function get_id_evento_tipo_usuario() {
        return $this->id_evento_tipo_usuario;
    }

    public function set_id_evento_tipo_usuario($id_evento_tipo_usuario) {
        $this->id_evento_tipo_usuario = $id_evento_tipo_usuario;
    }

    public function get_id_evento() {
        return $this->id_evento;
    }

    public function set_id_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function get_id_tipo_usuario() {
        return $this->id_tipo_usuario;
    }

    public function set_id_tipo_usuario($id_tipo_usuario) {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

}

?>
