<html>

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


    <body>
        
        <form action="validaRegisto.php" method="post">
            <div style="margin-left:350px;width:500px;" class="content-box-content">
                 <h2>Registe-se</h2>
                <div class="tab-content default-tab" id="tab1"> 
                    <table>
                        <tr>
                        <div id="nome" style="width:500px;  margin-bottom:20px; ">

                            <td>Nome:</td> <td><input id="nome" style="height:30px;" name="nome" type="text"/></td>

                        </div>
                        </tr>

                        <tr>
                        <div id="username" style="width:500px;  margin-bottom:20px; ">
                            <td>User:</td> <td><input id="username" style="height:30px;" name="username" type="text"/> </td>
                        </div>
                        </tr>
                        <tr>
                        <div id="password" style="width:500px;  margin-bottom:20px; ">
                            <td>Password:</td> <td><input id="password" style="height:30px;" name="password" type="password"/> </td>
                        </div>
                        </tr>

                        <tr>
                            <td><input type="submit" class="button"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>


    </body>
</html>