<?php

Class AsistentesEventos {

    private $id_asistentes_eventos;
    private $id_usuario_detalle;
    private $id_actividad;
    private $fecha_registro;

    public function get_id_asistentes_eventos() {
        return $this->$id_asistentes_eventos;
    }

    public function set_id_asistentes_eventos($id_asistentes_eventos) {
        $this->id_asistentes_eventos = $id_asistentes_eventos;
    }

    public function get_id_usuario_detalle() {
        return $this->id_usuario_detalle;
    }

    public function set_id_usuario_detalle($id_usuario_detalle) {
        $this->id_usuario_detalle = $id_usuario_detalle;
    }

    public function get_id_actividad() {
        return $this->id_actividad;
    }

    public function set_id_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    public function get_fecha_registro() {
        return $this->fecha_registro;
    }

    public function set_fecha_registro($fecha_registro) {
        $this->fecha_registro = $fecha_registro;
    }

}

?>
