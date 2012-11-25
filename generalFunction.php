<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getLink
 *
 * @author Administrador
 */
class getcurrent {

  
    function curPageURL() {
        $pageURL = 'http';

        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    public function gerirArtigos() {
        
        $artigos = array(
            
            "id" => array(),
            "title" => array(),
            "description" => array(),
            "pubDate" => array()      
        );
      
        $con = mysql_connect("a.db.shared.orchestra.io","user_b0b749ab","(@H@zi0vv4&ewj");
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
        }

        mysql_select_db("feed", $con);

        $result = mysql_query("SELECT * FROM artigos");
        $k = 0;
        while ($row = mysql_fetch_array($result)) {
            $artigos['id'][$k] = $row['id'];
            $artigos['title'][$k] = $row['titulo'];
            $artigos['description'][$k] = $row['texto'];
            $artigos['pubDate'][$k] = $row['data'];
            $artigos['autor'][$k] = $row['autor'];
            $k++;
        }

        mysql_close($con);
        return $artigos;
        }
        

}

?>
