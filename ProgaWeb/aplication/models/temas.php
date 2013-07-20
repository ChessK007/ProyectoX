<?php

Class Temas {

    private $id_tema;
    private $id_instructor;
    private $nombre;
    private $costo;

    public function get_id_tema() {
        return $this->id_tema;
    }

    public function set_id_tema($id_tema) {
        $this->id_tema = $id_tema;
    }

    public function get_id_instructor() {
        return $this->id_instructor;
    }

    public function set_id_instructor($id_instructor) {
        $this->id_instructor = $id_instructor;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }

    public function get_costo() {
        return $this->costo;
    }

    public function set_costo($costo) {
        $this->costo = $costo;
    }

}

?>
