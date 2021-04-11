  <?php
  session_start();
  include("../configuracion/conexion.php");
  $conexion = conectar();
  $sql = "SELECT documento from usuarios where documento = " . $_POST["documento"];
  $rtdo = mysqli_query($conexion, $sql);
  if (!isset($_SESSION)) {
    session_start();
  }
  if (mysqli_num_rows($rtdo) == 0) {
    echo "<html><script>alert('El usuario " . $_POST["documento"], " no esta registrado');
        history.back();
        </script></html>";
  } else {
    $consulta = "SELECT * from usuarios where documento = " . $_POST["documento"];
    $resultado = mysqli_query($conexion, $consulta);
    $datos = mysqli_fetch_array($resultado);
    if (mysqli_num_rows($resultado) == 0) {
      echo "<html><script>alert('Datos incorrectos intente de nuevo');
          history.back();
          </script><html> ";
    } else {
      $_SESSION["documento"] = $datos['documento'];
      $_SESSION["nombre"] = $datos['nombre'];
      $_SESSION["apellido"] = $datos['apellido'];
      $_SESSION["direccion"] = $datos['direccion'];
      $_SESSION["telefono"] = $datos['telefono'];
      $_SESSION["ciudad"] = $datos['ciudad'];
      $_SESSION["foto"] = $datos['foto'];
      header('location:usuarios.php');
    }
  }
?>