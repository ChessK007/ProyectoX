<?php
include ('../libs/adodb5/adodb.inc.php');

include('../../layouts/header.php');
include('../../layouts/navegador.php');
//include('../../../models/ManejoBaseDatos.php');
include ('../../../models/ManejoBaseDatos.php');
include ('../../../models/actualiza_usuario.php');
include ('../../../libs/adodb5/adodb-pager.inc.php');
include ('../../../libs/adodb5/adodb.inc.php');
include ('../../../controllers/siteController/UsuarioController.php');

$usuario = new UsuarioController();
if (isset($_POST['nctrl_rfc'])) {

    if ($usuario->registrausuario($_POST['nctrl_rfc'])) {
        echo 'Registro Aceptado';
    }
}
?>
<div class="container">
    <div class="row">
        <form class="well" action="../../../controllers/siteController/Aceptacion.php" method="get">
            <h1>Reseteo de Password</h1>
            <input type="email" class="input-medium" name="email" placeholder="email" required="required">
            <input type="submit" class="btn btn-primary" value="Buscar">                
        </form>
    </div><!---row-->    
</div><!--container-->


<?php
include('../../layouts/footer.php');
?>


