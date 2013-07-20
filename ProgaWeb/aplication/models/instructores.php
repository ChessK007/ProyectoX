<?php

Class Instructores {

    private $id_instructor;
    private $especialidad;
    private $procedencia;

    public function get_id_instructor() {
        return $this->id_instructor;
    }

    public function set_id_instructor($id_instructor) {
        $this->id_instructor = $id_instructor;
    }

    public function get_especialidad() {
        return $this->especialidad;
    }

    public function set_especialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function get_procedencia() {
        return $this->procedencia;
    }

    public function set_procedencia($procedencia) {
        $this->procedencia = $procedencia;
    }

}

?>
