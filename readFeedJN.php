<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of readFeedJn
 *
 * @author Ricardo
 */
class readFeedJn {

    public function getRSSJN($urlFeed) {
        $url = $urlFeed;

        $file = "Feed.xml";
        $xml = file_get_html($url);
        $fh = fopen($file, 'w') or die("erro!");
        fwrite($fh, $xml);
        fclose($fh);

        $dados = array
            (
            "title" => array(),
            "category" => array(),
            "pubDate" => array(),
            "description" => array(),
            "link" => array()
        );

        $xmlDoc = new DOMDocument();


        if (filesize($file) > 0) {

            $xmlDoc->load($file);
            $raiz = $xmlDoc->getElementsByTagName("channel");

            foreach ($raiz as $rz) {

                $childs = $rz->childNodes;

                foreach ($childs as $cd) {

                    if ($cd->nodeName == "item") {

                        $childsItem = $cd->childNodes;

                        foreach ($childsItem as $ci) {
                            if ($ci->nodeName == 'title')
                                array_push($dados['title'], $ci->textContent);
                            else if ($ci->nodeName == 'category')
                                array_push($dados['category'], $ci->textContent);
                            else if ($ci->nodeName == 'pubdate')
                                array_push($dados['pubDate'], $ci->textContent);
                            else if ($ci->nodeName == 'description') {
                                array_push($dados['description'], $ci->textContent);
                            } else if($ci->nodeName == 'link'){               
                                array_push($dados['link'], $ci->textContent);
                            }
                        }
                    }
                }
            }
        }
        return $dados;
    }

}

?>
