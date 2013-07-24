<?php
    include ('../../models/Modelo.php');
    include ('../../models/actualiza_usuario.php');
    include ('../../libs/adodb5/adodb-pager.inc.php');
    include ('../../libs/adodb5/adodb.inc.php');
    include ('../../controllers/siteController/UsuarioController.php');

    $usuario = new UsuarioController();
    if(isset($_POST['nctrl_rfc'])){
        
        if($usuario->registrausuario($_POST['nctrl_rfc'])){
            header("Location: registroCorrecto.php");
        }
    }
?>

<?php
include ('../layouts/header.php');
include('../layouts/navegador.php');
?>

<div class="container">   


            <form action="" method="post" class="well">
                <h3 class="form-signin-heading" >ACTUALIZA</h3>
                <br>
                  
				<label for="nctrl_rfc[nombre_asistente]">Nombre</label>
                <input id="nctrl_rfc[nombre_asistente]" type="text" class="span3" name="nctrl_rfc[nombre_asistente]" placeholder="Nombre" required="required">
				<label for="nctrl_rfc[apellido_paterno]">Apellido Paterno</label>
                <input id="nctrl_rfc[apellido_paterno]" type="text" class="span3" name="nctrl_rfc[apellido_paterno]" placeholder="Apellido Paterno" required="required">
				<label for="nctrl_rfc[apellido_materno]">Apellido Materno</label>
                <input id="nctrl_rfc[apellido_materno]" type="text" class="span3" name="nctrl_rfc[apellido_materno]" placeholder="Apellido Materno" required="required"> <br><br>	
				<label for="nctrl_rfc[genero]">Genero</label>
                <input id="nctrl_rfc[genero]" type="text" class="span3" name="nctrl_rfc[genero]" placeholder="genero" required="required">
                                            <label for="nctrl_rfc[edad]">Edad</label>
                <input id="nctrl_rfc[edad]" type="text" class="span3" name="nctrl_rfc[edad]" placeholder="Edad" required="required"><br><br>
				<label for="nctrl_rfc[email]">E-mail</label>
                <input id="nctrl_rfc[email]" type="email" class="span3" name="nctrl_rfc[email]" placeholder="email" required="required">
				<label for="nctrl_rfc[nctrl_rfc]">No. Control</label>
                <input id="nctrl_rfc[nctrl_rfc]" type="text" class="span3" name="nctrl_rfc[nctrl_rfc]" placeholder="N.Control" required="required">
				<br><br>
             <a href="_form_reset_password.php"><input type="button" name="resetear_Passsword" value ="Resetear password" action="ManejoBaseDatos.php"></a><br><br>                
                <input type="submit" value="Aceptar" class="btn btn-primary"/> 
                <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
            </form>
        </div> 

<?php
include ('../layouts/footer.php');
?>
