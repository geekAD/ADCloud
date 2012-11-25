<?php
include 'init.php';
include 'generalFunction.php';

$retorno = new getcurrent();


$titulo = $_GET["textoTitulo"];
$texto = $_GET["textoArtigo"];

$date = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
$dataTempo = $date->format('Y-m-d H:i:s') . "\n";


$con = mysql_connect("a.db.shared.orchestra.io","user_b0b749ab","(@H@zi0vv4&ewj");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_b0b749ab", $con);


$sql = "INSERT INTO artigos (autor, data, titulo, texto) VALUES ('".$_SESSION['email']."','$dataTempo', '$titulo ', '$texto')";

echo $dataTempo;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
header( 'Location: /novoArtigo.php?sucess=1' ) ;



?>
