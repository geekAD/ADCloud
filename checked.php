
<?php
include 'init.php';

$dados = $_GET['op'];


$id = preg_replace("/[^0-9]/", "", $dados);

if(isset($_GET['delete'])){
mysql_query("DELETE FROM artigos WHERE artigos.id=$id");
header("location: gerirArtigos.php?numPag=".$_SESSION['numPag']);
}else if(isset($_GET['edit'])){
   header("location: editarArtigo.php?numPag=".$_SESSION['numPag']."&idArtigo=".$id); 
}



?>

