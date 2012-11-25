
<?php
include 'init.php';

$dados = $_POST['op'];
$id = preg_replace("/[^0-9]/", "", $dados);
echo $id;
if(($_POST['delete'])){

mysql_query("DELETE FROM artigos WHERE artigos.id=$id");
var_dump($id);
echo "delete";
header("location: /gerirArtigos.php?numPag=".$_SESSION['numPag']);
}else {
    
    var_dump($id);
    echo "edit";
    
header("location: /editarArtigo.php?numPag=".$_SESSION['numPag']."&idArtigo=".$id); 
}



?>

