<?php
  include ('../../../models/Modelo.php');
  include ('../../../models/deleteUser.php');
  include ('../../../libs/adodb5/adodb-pager.inc.php');
  include ('../../../libs/adodb5/adodb.inc.php');
  include("../../../controllers/siteController/deleteController.php");

  $deleteUser = new deleteController();
  if(isset($_POST['email']))
  {
      //echo "Email:".",".$_POST['email'];
      if($deleteUser->borra($_POST['email']))
      {
          if($deleteUser->borra($_POST['email']))
          {
              echo "Borro con exito";
          }
      }
      else
      {
          echo "No lo hay";
      }
      
  }
  else
  {
      //echo "No";
  }
?>

<?php
  include("../../layouts/header.php");
  include('../../layouts/navegador.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Borrar</title>
<link  rel="stylesheet" href="../css/bootstrap.css" type="text/css"></link>
<link  rel="stylesheet" href="../css/clases.css" type="text/css"></link>
</head>

<body>
  
  
  <div class="container">
    <form class="form-signin" method="post">
	  <h6>Consulta</h6>
	  <input type="text" class="login-field" value placeholder="Email" id="email" name="email">
	  <input type="submit" value="Consultar" class=" btn btn-primary">
	  <br>
	  <input type="submit" value="Borrar" class=" btn btn-primary">
	</form>
  </div>
<?php
  include("../../layouts/footer.php");
?>

