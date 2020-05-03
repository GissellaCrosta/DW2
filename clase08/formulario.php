<?php
session_start();
if (!$_SESSION ['persona']) {
  $_SESSION['persona']=[];
}
$nombre='';
$apellido='';
$fecha='';
if ($_POST)
{
  array_push($_SESSION['persona'], ["nombre" => $_POST['nombre'],"apellido" => $_POST['apellido'],"fecha" => $_POST['fecha']]);
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $fecha=$_POST['fecha'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Formulario con PHP </h1>
    <div id="Formulario">
      <form action="index.php" method="post">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="apellido" value="" placeholder="Apellido">
        <input type="text" name="fecha" value="" placeholder="Fecha de nac">
        <button type="submit" name="button">Enviar</button>
      </form>
      <p>
        <?php echo "Nombre: ", "$nombre,";?>
        <?php echo "Apellido: ", "$apellido, "; ?>
        <?php echo "Fecha de Nac: ", "$fecha, "; ?>
      </p>
      <ol>
      <?php
      $persona=$_SESSION['persona'];
     foreach ($persona as $key => $value) {
       echo"<li>".$value['nombre']." ".$value['apellido'].", ".$value['fecha']."</li>";
     }
       ?>
     </ol>
  </body>
</html>
