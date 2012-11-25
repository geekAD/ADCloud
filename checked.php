
<?php
include 'init.php';

$dados = $_POST['op'];


$id = preg_replace("/[^0-9]/", "", $dados);

if(isset($_POST['delete'])){
mysql_query("DELETE FROM artigos WHERE artigos.id=$id");
header("location: gerirArtigos.php?numPag=".$_SESSION['numPag']);
}else if(isset($_POST['edit'])){
   header("location: editarArtigo.php?numPag=".$_SESSION['numPag']."&idArtigo=".$id); 
}



?>

