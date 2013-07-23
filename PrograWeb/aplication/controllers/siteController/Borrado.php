<?php
  class borrado extends ManejoBaseDatos
  {
      private $borrar;
      
      function borrado()
      {
          parent::ManejoBaseDatos();
      }
      function _construct()
      {
          $this->ManejoBaseDatos();  
      }
      public function borrado_($email)
      {
          $borrar= new ManejoBaseDatos();
          echo $email;
      }
  }
?>
