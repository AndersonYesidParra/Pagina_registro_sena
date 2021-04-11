  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <title>Información</title>
  </head>

  <body>
    <?php session_start(); ?>
    <table width="400" height="150" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" align="center">
          <?php echo '<img src="' . $_SESSION["foto"] . '" width="100" heigth="100" />'; ?></td>
      </tr>
      <tr>
        <td height="10"></td>
      </tr>
      <tr>
        <th id="AzulEncabezado"><b>Documento</b></th>
        <td id="GrisContenido">
          <?php echo $_SESSION["documento"]; ?>
        </td>
      </tr>
      <tr>
        <th id="AzulEncabezado">
          <b>Nombres</b>
        </th>
        <td id="GrisContenido">
          <?php echo $_SESSION["nombre"]; ?>
        </td>
      </tr>
      <tr>
        <th id="AzulEncabezado">
          <b>Apellidos</b>
        </th>
        <td id="GrisContenido">
          <?php echo $_SESSION["apellido"]; ?>
        </td>
      </tr>
      <tr>
        <th id="AzulEncabezado">
          <b>Direccion</b>
        </th>
        <td id="GrisContenido">
          <?php echo $_SESSION["direccion"]; ?>
        </td>
      </tr>
      <tr>
        <th id="AzulEncabezado">
          <b>Telefono</b>
        </th>
        <td id="GrisContenido">
          <?php echo $_SESSION["telefono"]; ?>
        </td>
      </tr>
      <tr>
        <th id="AzulEncabezado">
          <b>Ciudad</b>
        </th>
        <td id="GrisContenido">
          <?php echo $_SESSION["ciudad"]; ?>
        </td>
      </tr>
    </table>
    <?php session_destroy() ?>

  </body>

  </html>