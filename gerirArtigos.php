<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    include 'generalFunction.php';
    include 'init.php';
    ?>
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
                            <a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                                Painel
                            </a>       
                        </li>

                        <li> 
                            <a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
                                Artigos
                            </a>
                            <ul>
                                <li><a href="/novoArtigo.php">Escrever Artigo</a></li>
                                <li><a class="current" href="/gerirArtigos.php">Gerir Artigos</a></li> <!-- Add class "current" to sub menu items also -->
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

        <div id="main-content"> <!-- Main Content Section with everything -->

            <noscript> <!-- Show a notification if the user has disabled javascript -->
                <div class="notification error png_bg">
                    <div>
                        Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
                    </div>
                </div>
            </noscript>

            <!-- Page Head -->
            <h2>Welcome <?php echo $_SESSION['email']; ?></h2>
            <p id="page-intro">What would you like to do?</p>



            <div class="clear"></div> <!-- End .clear -->

            <div class="content-box"><!-- Start Content Box -->

                <div class="content-box-header">

                    <h3>Gerir Artigos</h3>

                    <ul class="content-box-tabs">
                        <li><a href="#tab1" class="default-tab">Table</a></li> <!-- href must be unique and match the id of target div -->
                        <li><a href="#tab2">Forms</a></li>
                    </ul>

                    <div class="clear"></div>

                </div> <!-- End .content-box-header -->

                <div class="content-box-content">

                    <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->

                        <div class="notification attention png_bg">
                            <a href="#" class="close"><img src="resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
                            <div>
                                Aqui pode ver os seus artigos mais recentes
                            </div>
                        </div>

                        <table>

                            <thead>
                                <tr>
                                    <th><input class="check-all" type="checkbox" /></th>
                                    <th>Titulo</th>

                                    <th>Data</th>
                                    <th>Autor</th>

                                </tr>

                            </thead>

                            <tfoot>
                                <tr>
                                    <td colspan="6">
                                       

                                        <?php
                                        $artigos = new getcurrent(); //nome da cass
                                        $conteudo_Artigos = $artigos->gerirArtigos();
                                        ?>

                                        <div class="pagination">
                                            <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a>
                                            <!-- <a href="#" class="number current" title="1">1</a> -->
                                            <?php
                                            $classCurrent = "number";
                                            for ($i = 0; $i <= count($conteudo_Artigos['id']) / 5; $i++) {
                                                ?> 
                                                <!-- mandar variavel, fazer get para a mesma pagina, começar i = valor do get -->
                                                <a href="/gerirArtigos.php?numPag=<?php echo $i; ?>" <?php if ($_GET["numPag"] == $i) echo "class=" . 'number current'; ?> title="<?php echo $i; ?>"><?php echo $i; ?></a>
                                            <?php } ?>
                                            <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a>
                                        </div> <!-- End .pagination -->

                                        <div class="clear"></div>
                                    </td>
                                </tr>
                            </tfoot>
                            <?php
                            $numeroPagina = $_GET["numPag"];
                            if ($numeroPagina == 0)
                                $numeroPagina = 0;
                            else
                                $numeroPagina *=5;
                            ?>
                            <tbody>
                                <form action="checked.php" method="POST" >
                                    <?php for ($k = $numeroPagina; $k < $numeroPagina + 5; $k++) { ?>    
                                        <tr>
                                            <td><input  name="op" type="checkbox" <?php echo "value=" . $conteudo_Artigos['id'][$k]; ?>/></td>
                                            <td><a href="#" title="title"><?php echo $conteudo_Artigos['title'][$k]; ?></a></td>
                                            <td><?php echo $conteudo_Artigos['pubDate'][$k]; ?></td>
                                            <td><?php echo $conteudo_Artigos['autor'][$k]; ?></td>
                                            <td><?php echo $conteudo_Artigos['id'][$k]; ?></td>
                                            <td>
                                                <input type="image" name="edit" value="editar" src="resources/images/icons/pencil.png" alt="Edit" />
                                                <input type="image" name="delete" value="delete" src="resources/images/icons/cross.png" alt="Delete" /> 
                                            </td>

                                        </tr>
                                    <?php } ?></form>
                            </tbody> <?php $_SESSION['numPag'] = $_GET['numPag']; ?>

                        </table>
                    </div> <!-- End #tab1 -->

                    <div class="tab-content" id="tab2">

                        <form action="" method="post">

                            <fieldset> 

                                <p>
                                    <label>Small form input</label>
                                    <input class="text-input small-input" type="text" id="small-input" name="small-input" /> <span class="input-notification success png_bg">Successful message</span> <!-- Classes for input-notification: success, error, information, attention -->
                                    <br /><small>A small description of the field</small>
                                </p>

                                <p>
                                    <label>Medium form input</label>
                                    <input class="text-input medium-input" type="text" id="medium-input" name="medium-input" /> <span class="input-notification error png_bg">Error message</span>
                                </p>

                                <p>
                                    <label>Large form input</label>
                                    <input class="text-input large-input" type="text" id="large-input" name="large-input" />
                                </p>

                                <p>
                                    <label>Checkboxes</label>
                                    <input type="checkbox" name="checkbox1" /> This is a checkbox <input type="checkbox" name="checkbox2" /> And this is another checkbox
                                </p>

                                <p>
                                    <label>Radio buttons</label>
                                    <input type="radio" name="radio1" /> This is a radio button<br />
                                    <input type="radio" name="radio2" /> This is another radio button
                                </p>

                                <p>
                                    <label>This is a drop down list</label>              
                                    <select name="dropdown" class="small-input">
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                        <option value="option3">Option 3</option>
                                        <option value="option4">Option 4</option>
                                    </select> 
                                </p>

                                <p>
                                    <label>Textarea with WYSIWYG</label>
                                    <textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
                                </p>

                                <p>
                                    <input class="button" type="submit" value="Submit" />
                                </p>

                            </fieldset>

                            <div class="clear"></div><!-- End .clear -->

                        </form>

                    </div> <!-- End #tab2 -->        

                </div> <!-- End .content-box-content -->

            </div> <!-- End .content-box -->



    </body>

</html>