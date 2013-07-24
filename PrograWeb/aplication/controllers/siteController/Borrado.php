<?php
  class borrado extends Modelo
  {
      private $borrar;
      
      function borrado()
      {
          parent::Modelo();
      }
      function _construct()
      {
          $this->Modelo();  
      }
      public function borrado_($email)
      {
          $borrar= new Modelo();
          echo $email;
      }
  }
?>
