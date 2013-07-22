
<?php
include ('../../layouts/header.php');
include('../../layouts/navegador.php');
?>

<div class="container">   
    <form action="" method="post" class="well">
        <h1>Asistente</h1>
        <label for="id_asistente">id asistente</label>
        <input id="id_asistente" type="text" class="span3" placeholder="ID" required="required">      
        <label for="nombre_asistente">Nombre</label>
        <input id="nombre_asistente" type="text" class="span3" placeholder="Nombre" required="required">
        <label for="apellido_paterno">Apellido Paterno</label>
        <input id="apellido_paterno" type="text" class="span3" placeholder="Apellido Paterno" required="required">
        <label for="apellido_materno">Apellido Materno</label>
        <input id="apellido_materno" type="text" class="span3" placeholder="Apellido Materno" required="required"> 	
        <label for="sexo">Genero<br><input type="radio" name="sexo" id="sexo" value="mujer"> Mujer<br>
            <input type="radio" name="sexo" id="sexo" value="hombre"> Hombre<br><br>
            <input id="edad" type="text" class="span3" placeholder="Edad" required="required">
            <label for="email">E-mail</label>
            <input id="email" type="email" class="span3" placeholder="email" required="required">
            <label for="nctrl_rfc">No. Control</label>
            <input id="nctrl_rfc" type="text" class="span3" placeholder="N.Control" required="required">
            <label for="password">Password</label>
            <input id="password" type="password" class="span3" placeholder="password" required="required"> 	
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a href="_form_index.html">  <button type="button" class="btn btn-danger">Regresar </button> </a>
    </form>
</div> 

<?php
include ('../../layouts/footer.php');
?>

