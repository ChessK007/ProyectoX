
<?php
    include ('../../models/Modelo.php');
    include ('../../models/actualiza_usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/siteController/UsuarioController.php');

    $usuario = new UsuarioController();
    if(isset($_POST['email'])){
        
        if($usuario->registrausuario($_POST['email'])){
            header("Location: registroCorrecto.php");
            exit();
        }
    }
?>


<?php
    include ('../layouts/header.php');
?>

<div class="row">
<div class="span6">
    <form 
        action="" 
        method="POST"> 
        <label for="email[email]">E-MAIL:</label>
        <input type="email" id="email[email]" name="email[email]"/> 
        <input type="submit" value="Registrar" class="btn btn-primary"/> 
    </form>
              
          </div>
         
    </div>   


         
    

<?php
include('../layouts/footer.php');
?>
