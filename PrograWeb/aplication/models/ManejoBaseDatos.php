<?php

include ('../libs/adodb5/adodb.inc.php');
?>

<?php

class ManejoBaseDatos {
    
    private $db;
    
    
    function ManejoBaseDatos() {
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'ProyectoX');
        if(db){
            echo 'Chido';
        }else{
            echo $db;
        }
        
        $nombre_asistente = $_POST["nombre_asistente"];
        $apellido_paterno = $_POST["apellido_paterno"];
        $apellido_materno = $_POST["apellido_materno"];
        $genero = $_POST["genero"];
        $edad = $_POST["edad"];
        $email = $_POST["email"];
        $nctrl_rfc = $_POST["nctrl_rfc"];
        $password = $_POST["password"];
        
        $actual = mysqli_query($enlace,"call actualiza('$nombre_asistente','$apellido_paterno',
                                                        '$apellido_materno','$genero','$edad',
                                                        ,'$email','$nctrl_rfc')");
        if (!$actual){
            echo "Error al guardar";
            }
            else{echo "Guardado con exito";}
        mysqli_close($enlace);
    }   
    

}
?>
