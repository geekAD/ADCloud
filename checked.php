
<?php
include 'init.php';

$dados = $_POST['op'];


$id = preg_replace("/[^0-9]/", "", $dados);

var_dump($id);
if(isset($_GET['delete'])){
mysql_query("DELETE FROM artigos WHERE artigos.id=$id");

//header("location: gerirArtigos.php?numPag=".$_SESSION['numPag']);
}else if(isset($_GET['edit'])){
   //header("location: editarArtigo.php?numPag=".$_SESSION['numPag']."&idArtigo=".$id); 
}



?>

