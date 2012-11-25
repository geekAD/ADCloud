<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$nome = $_POST['nome'];

$con = mysql_connect("localhost","ricardo","IYOvfj432");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("feed", $con);

mysql_query("INSERT INTO utilizadores (email, password, nome)
VALUES ('".$username."', '".$password."','".$nome."')");

header("location: valida.php?email=".$password."&password=");
mysql_close($con);

?>
