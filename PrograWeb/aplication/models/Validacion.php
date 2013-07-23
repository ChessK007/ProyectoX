<?php

class Validacion {

    private $expresion = array(
            'nombre' => "/^[a-zA-Z\s]+$/",
            'pass' => "/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/", //sigue estando mal
            'entero' => "/^[0-9]+$/",
            'decimal' => "/^[0-9]*\.[0-9]+$/",
            'genero' => "/^[M|F]{1}$/",
            'edad' => "/^\d{1,3}$/",
            'email' => "/^[a-zA-Z0-9]+[a-zA-Z0-9\/-_]*@[a-zA-Z0-9]+\.[a-zA-Z]+\.?[a-zA-Z]+$/"
        );

    public function Validacion() {
        
    }

    public function valida($tipo, $cadena) {
        $aux = preg_match($this->expresion[$tipo], $cadena);
        return $aux;
    }
}
?>
