<?php
include 'init.php';
//CONSULTA DO UTILIZADOR




$consulta="Select * from utilizadores where email='" . $_POST['email'] . "' and password='" . md5(trim($_POST['password'])) . "'";
$resultado=mysql_query($consulta);
if (mysql_num_rows($resultado)>0) //SE O EMAIL E A PASSWORD COINCIDIREM
{
//COLOCA NA VARIAVEL LINHA OS DADOS DA CONSULTA
$linha=mysql_fetch_array($resultado);
//COLOCA O EMAIL EM SESSAO
$_SESSION['email']=$linha['email'];

//MD5
// $consulta=”Select * from utilizadores where email=’” . $_POST['email'] . “‘ and password=’” . md5(trim($_POST['password'])) . “‘”;

//REDIRECCIONA A PAGINA PARA A PAGINA SECRETA
header("location: index.php");
}
else //CASO NÃO COINCIDAM
{
//REDIRECCIONA PARA A PAGINA INICIAL REPORTANDO O ERRO
header("location: login.php?erro=1");
}
?>