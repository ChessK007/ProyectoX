<?php
  class deleteController extends deleteUser
  {
    function deleteController()
    {
        
    }
    
    function borra($email)
    {
        parent:: deleteUser(); 
        $rs=$this->consulta_existencia("DELETE from evt_asistentes where email="."'".$email."'");
        //echo $email;
        
        return $rs;
    }
  }
?>
