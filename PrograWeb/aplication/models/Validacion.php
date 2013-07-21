<?php

class Validacion {

    public $expresion;

    public function Validacion() {
        $this->expresion = array(
            'nombre' => "/^[a-zA-Z\s]+$/",
            'pass' => "/^([a-z]+[A-Z]+\d+\W+)([a-z]+[A-Z]+\d+\W+)$/", //sigue estando mal
            'entero' => "/^[0-9]+$/",
            'decimal' => "/^[0-9]*\.[0-9]+$/",
            'genero' => "/^[M|F]{1}$/",
            'edad' => "/^\d{1,3}$/",
            'email' => "/^[a-zA-Z0-9]+[a-zA-Z0-9\/-_]*@[a-zA-Z0-9]+\.[a-zA-Z]+\.?[a-zA-Z]+$/"
        );
    }

    public function valida($tipo, $cadena) {
        $aux = preg_match($this->expresion[$tipo], $cadena);
        return $aux;
    }
}
?>
