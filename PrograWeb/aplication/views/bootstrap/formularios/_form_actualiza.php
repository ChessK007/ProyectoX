<?php
    include ('../../../models/ManejoBaseDatos.php');
    include ('../../../models/actualiza_usuario.php');
    include ('../../../libs/adodb5/adodb-pager.inc.php');
    include ('../../../libs/adodb5/adodb.inc.php');
    include ('../../../controllers/siteController/UsuarioController.php');

    $usuario = new UsuarioController();
    if(isset($_POST['email'])){
        
        if($usuario->registrausuario($_POST['email'])){
            header("Location: registroCorrecto.php");
        }
    }
?>



<?php
include ('../../layouts/header.php');
include('../../layouts/navegador.php');
?>

<div class="container">   


            <form action="" method="post" class="well">
                <h3 class="form-signin-heading" >ACTUALIZA</h3>
                <br>
                  
				<label for="email[nombre_asistente]">Nombre</label>
                <input id="email[nombre_asistente]" type="text" class="span3" placeholder="Nombre" required="required">
				<label for="email[apellido_paterno]">Apellido Paterno</label>
                <input id="email[apellido_paterno]" type="text" class="span3" placeholder="Apellido Paterno" required="required">
				<label for="email[apellido_materno]">Apellido Materno</label>
                <input id="email[apellido_materno]" type="text" class="span3" placeholder="Apellido Materno" required="required"> <br><br>	
				<label for="email[genero]">Genero</label>
                <input id="email[genero]" type="text" class="span3" placeholder="genero" required="required">
                                            <label for="email[edad]">Edad</label>
                <input id="email[edad]" type="text" class="span3" placeholder="Edad" required="required"><br><br>
				<label for="email[email]">E-mail</label>
                <input id="email[email]" type="email" class="span3" placeholder="email" required="required">
				<label for="email[nctrl_rfc]">No. Control</label>
                <input id="email[nctrl_rfc]" type="text" class="span3" placeholder="N.Control" required="required">
				<br><br>
             <a href="_form_reset_password.php"><input type="button" name="resetear_Passsword" value ="Resetear password" action="ManejoBaseDatos.php"></a><br><br>                
                <input type="submit" value="Aceptar" class="btn btn-primary"/> 
                <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
            </form>
        </div> 

<?php
include ('../../layouts/footer.php');
?>