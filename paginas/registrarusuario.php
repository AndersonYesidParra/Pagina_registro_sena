  <?php
    include("../configuracion/conexion.php");
    $conexion = conectar();
    $documento = $_POST["documento"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $ciudad = $_POST["ciudad"];
    $consulta1 = "SELECT documento from usuarios where documento=$documento";
    $resultado1 = mysqli_query($conexion, $consulta1);
    if (mysqli_num_rows($resultado1) == 1) {
      echo "<html><script> alert('El Documento " . $documento . " ya esta registrado intente con otro usuario'); 
      history.back();
      </script></html>";
    } else {
      $nombrefoto = $_FILES['foto']['name'];
      $ruta = $_FILES['foto']['tmp_name'];
      echo $ruta;
      if ($nombrefoto == "") {
        $destino = "../imagenes/Fotos/UsuarioPredeterminado.png";
        $registrausuario = "INSERT into usuarios(documento,nombre,apellido,direccion,telefono,ciudad,foto) values ('$documento', '$nombre','$apellido','$direccion','$telefono','$ciudad','$destino')";
        $registro = mysqli_query($conexion, $registrausuario);
      } else {
        $destino = "../imagenes/Fotos/" . $nombrefoto;
        move_uploaded_file($ruta, $destino);
        $registrausuario = "INSERT into usuarios(documento,nombre,apellido,direccion,telefono,ciudad,foto) values ('$documento', '$nombre','$apellido','$direccion','$telefono','$ciudad','$destino')";
        $registro = mysqli_query($conexion, $registrausuario);
      }
      if ($registro) {
        echo "<script>alert('El usuario se registro exitosamente');
            window.location='../index.html'</script>";
      } else {
        echo "<script>alert('Error al registrar el usuario'); 
            history.back();</script> ";
      }
    }
  ?>