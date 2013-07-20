<?php

Class Actividades {

    private $id_actividad;
    private $id_evento;
    private $nombre_actividad;
    private $lugares;
    private $precio;
    private $descripcion;

    public function get_id_actividad() {
        return $this->id_actividad;
    }

    public function set_id_actividad($id_actividad) {
        $this->id_actividad = $id_actividad;
    }

    public function get_id_evento() {
        return $this->id_evento;
    }

    public function set_id_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function get_nombre_actividad() {
        return $this->nombre_actividad;
    }

    public function set_nombre_actividad($nombre_actividad) {
        $this->nombre_actividad = $nombre_actividad;
    }

    public function get_lugares() {
        return $this->lugares;
    }

    public function set_lugares($lugares) {
        $this->lugares = $lugares;
    }

    public function get_precio() {
        return $this->precio;
    }

    public function set_precio($precio) {
        $this->precio = $precio;
    }

    public function get_descripcion() {
        return $this->descripcion;
    }

    public function set_descripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

}

?>
