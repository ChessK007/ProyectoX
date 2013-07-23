<?php
  class deleteController extends deleteUser
  {
    function deleteController()
    {
        
    }
    
    function borra($email)
    {
        parent:: deleteUser(); 
<<<<<<< HEAD
        $rs=$this->consulta_existencia("DELETE from evt_asistentes where email="."'".$email."'");
=======
        $rs=$this->consulta_existencia('DELETE  from usuarios_detalles WHERE EMAIL='."'".$email."'");
>>>>>>> 1ab4806d676bf6cb3e97a7035ba81ba85466a4d9
        //echo $email;
        
        return $rs;
    }
  }
?>
