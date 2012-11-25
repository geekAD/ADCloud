
<?php
include 'init.php';

$dados = $_POST['op'];


if(isset($_GET['delete'])){
$id = preg_replace("/[^0-9]/", "", $dados);
mysql_query("DELETE FROM artigos WHERE artigos.id=$id");
var_dump($id);
echo "delete";
//header("location: gerirArtigos.php?numPag=".$_SESSION['numPag']);
}else if(isset($_GET['edit'])){
    $id = preg_replace("/[^0-9]/", "", $dados);
    var_dump($id);
    echo "edit";
    
//header("location: editarArtigo.php?numPag=".$_SESSION['numPag']."&idArtigo=".$id); 
}



?>

