<?php
include 'init.php';
include 'generalFunction.php';

$retorno = new getcurrent();


$titulo = $_POST["textoTitulo"];
$texto = $_POST["textoArtigo"];

$date = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
$dataTempo = $date->format('Y-m-d H:i:s') . "\n";

$con = mysql_connect("a.db.shared.orchestra.io","user_b0b749ab","(@H@zi0vv4&ewj");
mysql_select_db("feed", $con);

$sql = "UPDATE artigos SET titulo="."'$titulo'".",texto="."'$texto'"." WHERE id="."'".$_GET['idArtigo']."'";

echo $dataTempo;
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);
header( 'Location: gerirArtigos.php?sucess=1&numPag='.$_SESSION['numPag'] ) ;



?>
