<?php

class UsuariosDetalles extends Modelo{
<<<<<<< HEAD

=======
    private $usuarios_detalles= 'usuarios_detalles';
>>>>>>> 261375060562ef8eb8b2975b6e24ec688e24d31b
    private $id_usuario_detalle;
    private $id_asistente;
    private $id_instructor;
    private $apellido_paterno;
    private $apellido_materno;
    private $nombre;
    private $sexo;
    private $edad;
    private $email;
    private $rfc;

    public function get_id_usuario_detalle() {
        return $this->id_usuario_detalle;
    }

    public function set_id_usuario_detalle($id_usuario_detalle) {
        $this->id_usuario_detalle = $id_usuario_detalle;
    }

    public function get_id_asistente() {
        return $this->id_asistente;
    }

    public function set_id_asistente($id_asistente) {
        $this->id_asistente = $id_asistente;
    }

    public function get_id_instructor() {
        return $this->id_instructor;
    }

    public function set_id_instructor($id_instructor) {
        $this->id_instructor = $id_instructor;
    }

    public function get_apellido_paterno() {
        return $this->apellido_paterno;
    }

    public function set_apellido_paterno($apellido_paterno) {
        $this->apellido_paterno = $apellido_paterno;
    }

    public function get_apellido_materno() {
        return $this->apellido_materno;
    }

    public function set_apellido_materno($apellido_materno) {
        $this->apellido_materno = $apellido_materno;
    }

    public function get_nombre() {
        return $this->nombre;
    }

    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }

    public function get_sexo() {
        return $this->sexo;
    }

    public function set_sexo($sexo) {
        $this->sexo = $sexo;
    }

    public function get_edad() {
        return $this->edad;
    }

    public function set_edad($edad) {
        $this->edad = $edad;
    }

    public function get_email() {
        return $this->email;
    }

    public function set_email($email) {
        $this->email = $email;
    }

    public function get_rfc() {
        return $this->rfc;
    }

    public function set_rfc($rfc) {
        $this->rfc = $rfc;
    }

}

?>
