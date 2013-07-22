<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
//include('../../../models/ManejoBaseDatos.php');
?>
<div class="container">
    <div class="row">
        <center><h1>Reseteo de Password</h1></center>
        <center><div class="span5">
                <form class="well" action="../../../controllers/siteController/Aceptacion.php" method="get">


            <form class="well" action="#" method="get">
                <h1>Reseteo de Password</h1>

                <input type="email" class="input-medium" name="email" placeholder="email" required="required">
                <input type="submit" class="btn btn-primary" value="Buscar">                
            </form>
    </div><!---row-->    
</div><!--container-->


    <?php
    include('../../layouts/footer.php');
    
    ?>


