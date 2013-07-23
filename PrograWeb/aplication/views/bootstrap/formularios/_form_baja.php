<?php
include('../../layouts/header.php');
include('../../layouts/navegador.php');
?>
<div class="container">
    <form class="well" method="get" action="#">
        <h1>Consulta</h1>
        <input type="text" class="login-field" value placeholder="Numero de control o RFC" maxlength="8">
        <input type="submit" value="Consultar" class=" btn btn-primary">       
        
    </form>
</div>

<?php
include('../../layouts/footer.php');
?>

