<?php
  class deleteController extends deleteUser
  {
    function deleteController()
    {
        
    }
    
    function borra($email)
    {
        parent:: deleteUser(); 
        $rs=$this->consulta_existencia($email);
        //echo $email;
        
        return $rs;
    }
  }
?>
