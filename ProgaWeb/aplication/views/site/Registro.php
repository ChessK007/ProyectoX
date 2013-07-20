<?php
  include("../layouts/encabezado.php");
?>


  <form action="RegistroControllers.php">
    <input type="text"  class="login-field " value placeholder="Apellido Paterno" id="paterno">
	<br>
	<input type="email" id="email" class="login-field " value placeholder="E-mail">	
	<br>
	<input type="password" id="password" class="login-field " value placeholder="Contrasena">	
    <br>
	<input type="submit" value="Enviar"  class="btn btn-large btn-primary">
  </form>
<?php
  include("../layouts/footer.php");
?>
