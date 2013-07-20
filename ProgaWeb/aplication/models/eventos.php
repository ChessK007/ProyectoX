<?php

Class Eventos {

    private $id_evento;
    private $nombre_evento;
    private $contacto;
    private $cuando;
    private $donde;
    private $informacion;
    private $fecha_inicio;
    private $fecha_fin;

    public function get_id_evento() {
        return $this->id_evento;
    }

    public function set_id_evento($id_evento) {
        $this->id_evento = $id_evento;
    }

    public function get_nombre_evento() {
        return $this->nombre_evento;
    }

    public function set_nombre_evento($nombre_evento) {
        $this->nombre_evento = $nombre_evento;
    }

    public function get_contacto() {
        return $this->contacto;
    }

    public function set_contacto($contacto) {
        $this->contacto = $contacto;
    }

    public function get_cuando() {
        return $this->cuando;
    }

    public function set_cuando($cuando) {
        $this->cuando = $cuando;
    }

    public function get_donde() {
        return $this->donde;
    }

    public function set_donde($donde) {
        $this->donde = $donde;
    }

    public function get_informacion() {
        return $this->informacion;
    }

    public function set_informacion($informacion) {
        $this->informacion = $informacion;
    }

    public function get_fecha_inicio() {
        return $this->fecha_inicio;
    }

    public function set_fecha_inicio($fecha_inicio) {
        $this->fecha_inicio = $fecha_inicio;
    }

    public function get_fecha_fin() {
        return $this->fecha_fin;
    }

    public function set_fecha_fin($fecha_fin) {
        $this->fecha_fin = $fecha_fin;
    }

}

?>