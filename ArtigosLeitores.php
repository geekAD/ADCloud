
<?php
include 'simple_html_dom.php';
require_once 'insertBD.php';
require_once 'readFeedJN.php';
?>


<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title>Portal de feeds</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div id="wrapper"><!-- Begin Wrapper -->

            <div id="preface"><!-- Begin Top Area -->


            </div><!-- End Top Area -->

            <div id="header">
                <div id="logo">
                    <h1><a href="/index.php">Portal de Feeds</a></h1>
                    <h2>Sabe todos as novidades aqui</h2>
                </div>
                <div id="middle">

                </div>
                <div id="search">    

                </div>
            </div>

            <div id="navigation" class="menu">
                <ul>
                    <li><a href="/feedJN/index.php">Home</a>

                    </li>
                    <li href="/ArtigosLeitores.php"><a>Artigos dos Leitores</a></li>
                    <li><a href="/JNArtigos.php?rss=http://feeds.jn.pt/JN-ULTIMAS">Jornal de Noticias</a>
                        <ul>
                            <li><a href="/JNArtigos.php?rss=http://feeds.jn.pt/JN-ULTIMAS">Ultimas Notícias</a></li>
                            <li><a href="/JNArtigos.php?rss=http://feeds.jn.pt/JN-Tecnologia">Tecnologia</a></li>
                            <li><a href="/JNArtigos.php?rss=http://feeds.jn.pt/JN-Desporto">Desporto</a></li>
                        </ul>
                    </li>
                    <li><a href="/DNartigos.php?rss=http://feeds.dn.pt/DN-Portugal">Diario de Noticias</a>
                        <ul>
                            <li><a href="/DNartigos.php?rss=http://feeds.dn.pt/DN-Portugal">Ultimas Noticias</a></li>
                            <li><a href="/DNartigos.php?rss=http://feeds.dn.pt/DN-Desporto">Desporto</a></li>
                        </ul>
                    </li>
                    <li><a href="/Caras.php?rss=http://assinaturadigital.assineja.pt/Info/RSS/5">Revista Caras</a>
                    </li>

                </ul>
            </div>

<?php    $dados = new insertBD();  $artigos = $dados->getArtigosLeitores();    ?>
     <div id="main_content">
		<div id="main_content_header">
                
		</div>
                <?php for($k=0; $k<count($artigos['title']); $k++){ ?>
			<div id="main_content_inner">
			        <div class="post">
			            <h2 class="title"><a href="#"><?php echo $artigos['title'][$k]; ?></a></h2>
			            <p class="meta"><?php echo $artigos['pubDate'][$k]; ?></p>
			            <div class="entry">
				        <p><?php echo $artigos['description'][$k]; ?></p>
			            </div>
                                    <div><strong>Autor:</strong> <?php echo $artigos['autor'][$k]; ?></div>
		            </div>
			</div>
        
                   <? }?>
		<div id="main_content_footer">
		</div>
    </div>

            <div id="sidebar">

                <div id="sidebar_top">
                    <div class="block block_content">
                        <div class="block_header"></div>
                        <!--						<h3><a href="http://127.0.0.1/feedJN/login/teste.html" >Publica no Facebok</h3></a>-->
                        <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
                        <div class="block_bottom"></div>
                    </div>	
                    <div class="block block_content">
                        <div class="block_header"></div>
                        <h3>Pellenteque ornare </h3>
                        <ul>
                            <li><a href="#">Nec metus sed donec</a></li>
                            <li><a href="#">Magna lacus bibendum mauris</a></li>
                            <li><a href="#">Velit semper nisi molestie</a></li>
                            <li><a href="#">Eget tempor eget nonummy</a></li>
                            <li><a href="#">Nec metus sed donec</a></li>
                            <li><a href="#">Velit semper nisi molestie</a></li>
                            <li><a href="#">Eget tempor eget nonummy</a></li>
                            <li><a href="#">Nec metus sed donec</a></li>
                        </ul>
                        <div class="block_bottom"></div>
                    </div>
                </div>

                <div id="sidebar_bottom_left">
                    <div class="block block_content">
                        <div class="block_header"></div>				
                        <h3>Bibendum mauris</h3>
                        <ul>
                            <li><a href="#">Nec metus sed donec</a></li>
                            <li><a href="#">Magna lacus bibendum mauris</a></li>
                            <li><a href="#">Velit semper nisi molestie</a></li>
                            <li><a href="#">Eget tempor eget nonummy</a></li>
                            <li><a href="#">Nec metus sed donec</a></li>
                        </ul>
                        <div class="block_bottom"></div>
                    </div>
                </div>

                <div id="sidebar_bottom_right">	
                    <div class="block block_content">
                        <div class="block_header"></div>
                        <h3>Turpis nulla</h3>
                        <ul>
                            <li><a href="#">Nec metus sed donec</a></li>
                            <li><a href="#">Magna lacus bibendum mauris</a></li>
                            <li><a href="#">Velit semper nisi molestie</a></li>
                            <li><a href="#">Eget tempor eget nonummy</a></li>
                            <li><a href="#">Magna lacus bibendum mauris</a></li>
                            <li><a href="#">Velit semper nisi molestie</a></li>
                            <li><a href="#">Eget tempor eget nonummy</a></li>
                            <li><a href="#">Nec metus sed donec</a></li>
                        </ul>
                        <div class="block_bottom"></div>
                    </div>
                </div>

            </div>
            <div style="clear: both;">&nbsp;</div>			

        </div>

        <div id="footer">
            <div id="footer_regions">	
                <div id="footer_left">
                    <h3>PostScript Left</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis tortor sed risus elementum sed rhoncus leo congue. 
                        Curabitur massa lacus, sollicitudin eu pulvinar non, imperdiet sed erat. In in est metus, ut porta arcu. Pellentesque sodales 
                        viverra elit et suscipit. Maecenas elit nisi, adipiscing vitae volutpat vestibulum, dictum eu nisl. Morbi nisi lacus, lobortis 
                        a bibendum sed, convallis et magna. Suspendisse potenti.</p>
                </div>


                <div id="footer_leftmiddle">	
                    <h3>PostScript Left Middle</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis tortor sed risus elementum sed rhoncus leo congue. 
                        Curabitur massa lacus, sollicitudin eu pulvinar non, imperdiet sed erat. In in est metus, ut porta arcu. Pellentesque sodales 
                        viverra elit et suscipit. Maecenas elit nisi, adipiscing vitae volutpat vestibulum, dictum eu nisl. Morbi nisi lacus, lobortis 
                        a bibendum sed, convallis et magna. Suspendisse potenti.</p>
                </div>

                <div id="footer_rightmiddle">	
                    <h3>PostScript Right Middle</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis tortor sed risus elementum sed rhoncus leo congue. 
                        Curabitur massa lacus, sollicitudin eu pulvinar non, imperdiet sed erat. In in est metus, ut porta arcu. Pellentesque sodales 
                        viverra elit et suscipit. Maecenas elit nisi, adipiscing vitae volutpat vestibulum, dictum eu nisl. Morbi nisi lacus, lobortis 
                        a bibendum sed, convallis et magna. Suspendisse potenti.</p>
                </div>


                <div id="footer_right">
                    <h3>PostScript Right</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc convallis tortor sed risus elementum sed rhoncus leo congue. 
                        Curabitur massa lacus, sollicitudin eu pulvinar non, imperdiet sed erat. In in est metus, ut porta arcu. Pellentesque sodales 
                        viverra elit et suscipit. Maecenas elit nisi, adipiscing vitae volutpat vestibulum, dictum eu nisl. Morbi nisi lacus, lobortis 
                        a bibendum sed, convallis et magna. Suspendisse potenti.</p>
                </div>  
            </div>
        </div>

        <div id="footer_bottom">

            <div id="footer_bottom_region">
                &copy; created by <a href="" title="Web Development">Ricardo Costa</a>
            </div>

        </div>

    </body>
</html>