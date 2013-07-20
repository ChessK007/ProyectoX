<<<<<<< HEAD
<?php
   class Modelo{
           private $db;
           function Modelo(){
                      $this->db = ADONewConnection('mysql');
                      $this->db->debug = true;
                      $this->db->Connect('localhost', 'root', '', 'proyecto');
           }

           public function consulta_datos()  {

                      $rs = $this->db->Execute(' SELECT * from'.$this-> nombre_tabla);
                      $this->get_error($rs,'Error en la consulta de datos');
                      return $rs;
           }
           
           public function inserta($rs){
               $rs = array();
               $rs['nombre']='Juan';
               $rs['email']='juan@gghh.mmn';
               $rs['password']='*****';
               $sql_insert= $this->db->GetInsertSql($this->nombre_tabla,$rs);
               
               $this->get_error($this->db->Execute($sql_insert),'Error en Modelo.inserta');
           }
           
           public function get_error($result,$tipo){
               if($result === false){
                   die('Redireccionar a la pagina de error '.$tipo_error);
               }
           }
           
           public function show_grid($num ='10'){
               $sql = "SELECT * FROM ".$this->nombre_tabla;//Podemos poner alias
               $grid = new ADODB_Pager($this->db,$sql);
               $grid->Render($rows_per_page=$num);
           }
           
           public function actualiza($id){
               if(is_integer($id)){
               $sql = "SELECT * FROM".$this->nombre_tabla."
                   WHERE id=".$id;
               
               $record = $this->db->Execute($sql);
               $rs =array();
               $rs['nombre']='Pedro';
               $rs['email']='Pedro@nnnn.mmm';
               $rs['password']='000000';
               
               $sql_update=$this ->db->GetUpdateSQL($record,$rs);
               $this ->get_error($this->db -> Execute($sql_update),"Error al actualizar") ;
               }else{
                   die('OJO');
               }
           }
           
           public function elimina(){
               $sql = "DELETE FROM".$this->nombre_tabla;
               $this -> db-> Execute($sql);
               $this->get_error($this->db->Execute($sql),"Error al eliminar");
           }
   }
?>
=======
<?php

class Modelo{
    private $db;
    
    function Modelo(){
        $this->db= ADONewConnection('mysql');
        $this->db->debug = TRUE;
        $this->db->Connect('localhost','root','len21se13','Proyecto');
        
    }
    
    public function consulta_datos(){
        $rs = $this-> db -> Execute ('Select * from'.$this->instructor);
        return $rs;
    }
    
}

?>
>>>>>>> 261375060562ef8eb8b2975b6e24ec688e24d31b
