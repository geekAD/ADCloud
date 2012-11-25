<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of insertBD
 *
 * @author Ricardo
 */
class insertBD {

    private $databaseName;
    private $password;
    private $url;
    private $dados = array();

    public function getDatabaseName() {
        return $this->databaseName;
    }

    public function setDatabaseName($databaseName) {
        $this->databaseName = $databaseName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getDados() {
        return $this->dados;
    }

    public function setDados($dados) {
        $this->dados = $dados;
    }

    function __construct() {  //construtor
    }

    public function insertNew($array, $urlDB, $dbName, $user, $password) {

        $con = mysql_connect($urlDB, $user, $password);
        if (!$con)
            die('Could not connect: ' . mysql_error());

        mysql_select_db($dbName, $con);


        for ($k = 0; $k < count($array['title']); $k++) {
            $description = htmlentities($array['description'][$k], ENT_QUOTES);
            $res = mysql_query("INSERT INTO noticia(title, category, pubDate, description) VALUES('" . $array['title'][$k] . "', '" . $array['category'][$k] . "','" . $array['pubDate'][$k] . "','" . $description . "')");
            if (!$res) {
                var_dump(mysql_error($con));
            }
        }
        mysql_close($con);
    }

    public function selectDados($urlDB, $dbName, $user, $password) {

        $selectDados = array
            (
            "title" => array(),
            "category" => array(),
            "pubDate" => array(),
            "description" => array()
        );

        $con = mysql_connect($urlDB, $user, $password);

        if (!$con)
            die('Could not connect: ' . mysql_error());

        mysql_select_db($dbName, $con);

        $result = mysql_query("SELECT * FROM noticia");
        $i = 1;
        while ($row = mysql_fetch_array($result)) {
            $selectDados['title'][$i] = $row['title'];
            $selectDados['pubDate'][$i] = $row['pubDate'];
            $selectDados['description'][$i] = $row['description'];
            $selectDados['category'][$i] = $row['category'];
            $i++;
        }

        mysql_close($con);
        return $selectDados;
    }

    public function getArtigosLeitores($urlDB, $dbName, $user, $password) {

        $artigos = array
            (
            "title" => array(),
            "pubDate" => array(),
            "description" => array(),
            "autor" => array()
        );


        $con = mysql_connect($urlDB, $user, $password);

        if (!$con)
            die('Could not connect: ' . mysql_error());

        mysql_select_db($dbName, $con);

        $result = mysql_query("SELECT * FROM  artigos");
        $i = 0;
        while ($row = mysql_fetch_array($result)) {
            $artigos['title'][$i] = $row['titulo'];
            $artigos['pubDate'][$i] = $row['data'];
            $artigos['description'][$i] = $row['texto'];
            $artigos['autor'][$i] = $row['autor'];
            $i++;
        }
        mysql_close($con);
        return $artigos;
    }

}

?>
