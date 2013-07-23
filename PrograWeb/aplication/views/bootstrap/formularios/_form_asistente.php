
<?php
include ('../../layouts/header.php');
include ('../../layouts/navegador.php');
include ('../../../models/ManejoBaseDatos.php');
include ('../../../models/registra_usuario.php');
include ('../../../libs/adodb5/adodb-pager.inc.php');
include ('../../../libs/adodb5/adodb.inc.php');
include ('../../../controllers/siteController/registroController.php');


$usuario = new RegistroController();
    if(isset($_POST['usuario'])){
       
        if($usuario->registraUsuario($_POST['usuario'])){ 
            die('Registro Correcto');
            exit();
        }
    }

?>

<div class="container">   
    <form action="" method="post" class="well">
        <h3 class="form-signin-heading" >Asistente</h3>
        <br>
        <label for="usuario[nombre_asistente]">Nombre</label>
        <input id="usuario[nombre_asistente]" name="usuario[nombre_asistente]" type="text" class="span3" placeholder="Nombre" required="required">
        <label for="usuario[apellido_paterno]">Apellido Paterno</label>
        <input id="usuario[apellido_paterno]" name="usuario[apellido_paterno]" type="text" class="span3" placeholder="Apellido Paterno" required="required">
        <label for="usuario[apellido_materno]">Apellido Materno</label>
        <input id="usuario[apellido_materno]" name="usuario[apellido_materno]" type="text" class="span3" placeholder="Apellido Materno" required="required"> 	
        <label for="usuario[genero]">Genero<br><input type="radio" name="usuario[genero]" id="usuario[genero]" value="mujer"> Mujer<br>
            <input type="radio" name="usuario[genero]" id="usuario[genero]" value="hombre"> Hombre<br><br>
            <label for="usuario[edad]">Edad</label>
            <input id="usuario[edad]" name="usuario[edad]" type="number" class="span3" required="required">
            <label for="usuario[email]">E-mail</label>
            <input id="usuario[email]" name="usuario[email]" type="email" class="span3" placeholder="email" required="required">
            <label for="usuario[nctrl_rfc]">No. Control</label>
            <input id="usuario[nctrl_rfc]" name="usuario[nctrl_rfc]" type="text" class="span3" placeholder="N.Control o RFC" required="required">
            <label for="usuario[password]">Password</label>
            <input id="usuario[password]" name="usuario[password]" type="password" class="span3" placeholder="password" required="required"> 	
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
    </form>
</div> 

<?php


 include ('../../layouts/footer.php');

?>
