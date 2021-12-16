<?php
include("../functions.php");

if ((isset($_SESSION['uid']) && isset($_SESSION['username']) && isset($_SESSION['user_level']))) {
  if ($_SESSION['user_level'] == "staff") {
    header("Location: index.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Registro de Empleados</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="back">
  <div class="contenedor_todo">
    <div class="caja_delantera">
      <form id="loginform">
      <h2>Registro de Empleados</h2>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Usuario" required="required" autofocus="autofocus">
            <label for="inputUsername">Usuario</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Contraseña" required="required">
            <label for="inputPassword">Contraseña</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="text" id="inputRole" name="role" class="form-control" placeholder="Rol" required="required">
            <label for="inputRole">Rol</label>
          </div>
        </div>
        <div class="form-group">
          <div id="warningbox">
          </div>
          <input type="submit" class="btn btn-danger btn-block" form="loginform" name="btnlogin" value="Ingresar" />
      </form>
      <a href="../index.php" class="btn btn-danger btn-block">Volver al Inicio</a>
    </div>
  </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script type="text/javascript">
    $('#loginform').submit(function() {
      $.ajax({
        type: "POST",
        url: 'process.php',
        data: {
          username: $("#inputUsername").val(),
          password: $("#inputPassword").val(),
          role: $("#inputRole").val()
        },
        success: function(data) {
          if (data === 'correct') {
            window.location.replace('index.php');
          } else {
            $("#warningbox").html("<div class='alert alert-primary' role='alert'>" + data + "Registrado!</div>");
          }
        }
      });
      return false;
    });
  </script>

</body>

</html>