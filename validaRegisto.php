<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$nome = $_POST['nome'];

$con = mysql_connect("a.db.shared.orchestra.io","user_b0b749ab","(@H@zi0vv4&ewj");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("a.db.shared.orchestra.io", $con);

mysql_query("INSERT INTO utilizadores (email, password, nome)
VALUES ('".$username."', '".$password."','".$nome."')");
header("location: valida.php?email=".$password."&password=");
mysql_close($con);

?>
