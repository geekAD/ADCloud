
<?php include 'init.php';

?>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

        <title>Portal de feeds | Sign In</title>

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

    <body id="login">

        <div id="login-wrapper" class="png_bg">
            <div id="login-top">

                <span style="color:white; font-size:30px;">Portal de Feeds</span>
                <!-- Logo (221px width) -->
               <!-- <img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /> -->
            </div> <!-- End #logn-top -->

            <div id="login-content">
                <?php
                if (isset($_GET['erro'])) //SE EXISTIR ERRO
                    echo 'Erro no login. Tente novamente.';
                ?>
                <form name="login" method="post" action="valida.php">

                    <div class="notification information png_bg">
                        <div>
                            Just click "Sign In". No password needed.
                        </div>
                    </div>

                    <p>
                        <label>Username</label>
                        <input class="text-input" name="email"  maxlength="40"/>
                    </p>
                    <div class="clear"></div>
                    <p>
                        <label>Password</label>
                        <input class="text-input" type="password" name="password" />
                    </p>
                    <div class="clear"></div>
                    <p id="remember-password">
                        <input type="checkbox" />Remember me
                    </p>
                    <div class="clear"></div>
                    <table>
                   <tr>     
                   <td> <input class="button" style="width:70px; "type="submit" value="Sign In" /> </td>
                   <td><a href="/register.php"> <input  style="margin-left:20px;" class="button" style="width:70px;" value="Register" /> </a> </td>
                   </tr>
                    </table>    
                </form>
            </div> <!-- End #login-content -->

        </div> <!-- End #login-wrapper -->

    </body>

</html>
