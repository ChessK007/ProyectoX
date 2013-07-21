<?php

include ('../libs/adodb5/adodb.inc.php');
?>

<?php

class ManejoBaseDatos {
    
    private $db;
    
    function ManejoBaseDatos() {
        $this->db = ADONewConnection('mysql');
        $this->db->debug = true;
        $this->db->Connect('localhost', 'root', '', 'sitec');
        if(db){
            echo 'Chido';
        }else{
            echo $db;
        }
    }   
    

}
?>
