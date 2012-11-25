<?php

$username = $_POST['username'];
$password = md5($_POST['password']);
$nome = $_POST['nome'];

$con = mysql_connect("https://mysql.orchestra.io/index.php?db=db_b0b749ab&token=ba4b62c5b6b68686eff2d41638bed125#PMAURL:db=db_b0b749ab&server=1&target=db_structure.php&token=ba4b62c5b6b68686eff2d41638bed125","user_b0b749ab","(@H@zi0vv4&ewj");
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
