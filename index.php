<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: empresasEdit.php');
    exit;
  }
  require 'bd.php';
  if(isset($_POST['btnInicio'])){
    $usuario = $_POST['user'];
    $pass = $_POST['password'];
    if(!empty($usuario) && !empty($pass)){
      $q = $conn->query("SELECT password FROM Login WHERE usuario = '$usuario'");
      $res = $q->fetch_assoc();
      if(mysqli_num_rows($q) != 0 && strcmp($pass, $res['password'])==0){
        $_SESSION['user_id'] = $usuario;
        header('Location: empresasEdit.php');
        require './partials/historial.php';
        $des = "INICIÓ SESIÓN.";
        nvo($des);
        exit();
      }else{
        $message = 'Usuario o contraseña incorrectas.';
      }
    }else{
      $message = 'Campos Vacíos.';
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ingresar</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body class="bg-C">
        <?php require 'partials/header.php' ?>
        <?php if(!empty($message)): ?>
        <?php echo  "<script> alert('".$message."'); </script>" ?>
        <?php endif; ?>
        <div class="container cont-Login">
            <div class="row">
                <div class="col-md-3"></div>
                <div class=" col-md-6 login">
                    <form action="index.php" method="post" class="form-group">
                        <h1>Iniciar Sesión</h1>
                        <label>Usuario</label>
                        <input type="text" name="user" id="user" placeholder="Ingresa tu Usuario" class="form-control"><br>
                        <label>Contraseña:</label>
                        <input type="password" name="password"  id="password" placeholder="Ingresa tu Contraseña" class="form-control"><br>
                        <input type="submit" name="btnInicio" class="btn btn-guardar btn-lg d-grid gap-2 col-5 mx-auto" value="Iniciar Sesión">
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <!--Footer-->
        <?php require 'partials/footer.php'; ?>
    </body>
</html>
