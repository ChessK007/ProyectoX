<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
//include('../../../models/ManejoBaseDatos.php');
include ('../../../models/Modelo.php');
include ('../../../models/actualiza_usuario.php');
include ('../../../libs/adodb5/adodb-pager.inc.php');
include ('../../../libs/adodb5/adodb.inc.php');
include ('../../../controllers/siteController/PasswordController.php');

$usuario = new PasswordController();
if (isset($_POST['email'])) {

    if ($usuario->registrausuario($_POST['email'])) {
        echo 'Registro Aceptado';
    }
}
?>
<div class="container">
    <div class="row">
        <form class="well" action="../../../controllers/siteController/Aceptacion.php" method="get">
            <h1>Reseteo de Password</h1>
            <label for="email[email]">Email</label>
            <input id="email[email]"  type="text" class="span3" name="email[email]" placeholder="email" required="required">
            <input type="submit" class="btn btn-primary" value="Buscar">                
        </form>
    </div><!---row-->    
</div><!--container-->


<?php
include('../../layouts/footer.php');
?>


