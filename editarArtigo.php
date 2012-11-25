<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <?php include 'init.php';
    ?>

<?php if ($_SESSION) { ?>
    <html xmlns="http://www.w3.org/1999/xhtml">

        <head>

            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

            <title>Simpla Admin</title>

            <!--                       CSS                       -->

            <!-- Reset Stylesheet -->
            <link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />

            <!-- Main Stylesheet -->
            <link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />

            <!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
            <link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	

            <!-- Colour Schemes
      
            Default colour scheme is green. Uncomment prefered stylesheet to use it.
            
            <link rel="stylesheet" href="resources/css/blue.css" type="text/css" media="screen" />
            
            <link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
     
            -->

            <!-- Internet Explorer Fixes Stylesheet -->

            <!--[if lte IE 7]>
                    <link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
            <![endif]-->

            <!--                       Javascripts                       -->

            <!-- jQuery -->
            <script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>

            <!-- jQuery Configuration -->
            <script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>

            <!-- Facebox jQuery Plugin -->
            <script type="text/javascript" src="resources/scripts/facebox.js"></script>

            <!-- jQuery WYSIWYG Plugin -->
            <script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>

            <!-- Internet Explorer .png-fix -->

            <!--[if IE 6]>
                    <script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
                    <script type="text/javascript">
                            DD_belatedPNG.fix('.png_bg, img, li');
                    </script>
            <![endif]-->

        </head>

        <body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

                <div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

                        <h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

                        <!-- Logo (221px wide) -->
                        <a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>

                        <!-- Sidebar Profile links -->
                        <div id="profile-links">
                            Hello, <a href="#" title="Edit your profile"><?php echo $_SESSION['email']; ?></a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
                            <br />
                            <a href="#" title="View the Site">View the Site</a> | <a href="/back/logout.php" title="Sign Out">Sign Out</a>
                        </div>        

                        <ul id="main-nav">  <!-- Accordion Menu -->

                            <li>
                                <a href="http://www.google.com" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                                    Painel
                                </a>       
                            </li>

                            <li> 
                                <a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
                                    Artigos
                                </a>
                                <ul>
                                    <li><a href="/back/novoArtigo.php">Escrever Artigo</a></li>
                                    <li><a class="current" href="/back/gerirArtigos.php?numPag=0">Gerir Artigos</a></li> <!-- Add class "current" to sub menu items also -->
                                    <li><a href="#">Gerir Comentarios</a></li>
                                    <li><a href="#">Gerir categorias</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="nav-top-item">
                                    Settings
                                </a>
                                <ul>
                                    <li><a href="#">General</a></li>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Users and Permissions</a></li>
                                </ul>
                            </li>      

                        </ul> <!-- End #main-nav -->

                    </div>



                </div>
            </div>

            <div class="content-box" style="width:500px;margin-top:20%; margin-left:350px;"><!-- Start Content Box -->

                <div class="content-box-header">

                    <h3>Escrever Artigos</h3>



                    <div class="clear"></div>

                </div>
            </div>
            <?php
            $result = mysql_query("SELECT * FROM artigos WHERE id=" . $_GET['idArtigo']);
            while ($row = mysql_fetch_array($result)) {
                $titulo = $row['titulo'];
                $texto = $row['texto'];
            }
            ?>
            <div class="clear"></div>
            <form action="editaArtigo.php?idArtigo=<?php echo $_GET['idArtigo'];?>" method="POST">
                <div style="margin-left:350px;width:500px;" class="content-box-content">
                    <div class="tab-content default-tab" id="tab1"> 

                        <div id="tituloArtigo" style="width:500px; margin-bottom:10px; ">
                            Titulo<input id="textoTitulo" value="<?php echo $titulo; ?>"name="textoTitulo" type="text"/>
                        </div>
                        <fieldset>
                            <textarea  id="textoArtigo" name="textoArtigo"  class="textarea" cols="56" rows="5"><?php echo $texto;?></textarea>
                        </fieldset>

                        <input type="submit" class="button"/>
                    </div>
                </div>
            </form>


            <?php
//            if ($_GET["sucess"] == 1) {
//                echo "<div class='notification success png_bg'>";
//
//                echo "<a href='#' class='close'><img src='resources/images/icons/cross_grey_small.png' title=Close this notification' alt='close' /></a>";
//                echo "<div>" . "Artigo adicionado com sucesso!" . "</div>";
//                echo "</div>";
//            } else {
//                
//            }
            ?>


        </body>


    </html>
<?php
} else {
    header("location: login.php");
}
?>