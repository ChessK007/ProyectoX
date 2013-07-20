<?php

Class Asistentes {

    private $id_asistente;
    private $especialidad;
    private $couta_cubrir;

    public function get_id_asistente() {
        return $this->id_asistente;
    }

    public function set_id_asistente($id_asistente) {
        $this->id_asistente = $id_asistente;
    }

    public function get_especialidad() {
        return $this->especialidad;
    }

    public function set_especialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function get_couta_cubrir() {
        return $this->couta_cubrir;
    }

    public function set_couta_cubrir($couta_cubrir) {
        $this->couta_cubrir = $couta_cubrir;
    }

}

?>
