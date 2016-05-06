<!DOCTYPE HTML>
<!--
  Spectral by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>

    <title>MOAP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

    <script src="//load.sumome.com/" data-sumo-site-id="4033db3e56ab0dd65169a4581d83781ab25a63791254a061282d8fe6dcdd779a" async="async"></script>
  </head>
  <body class="landing">
    <!-- Page Wrapper -->
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header" class="alt">
                    <h1><a href="index.html">MOAP</a></h1>
                    <nav id="nav">
                        <ul>
                            <li class="special">
                                <a href="#menu" class="menuToggle"><span>Menu</span></a>
                                <div id="menu">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="getting_started.html">Getting Started</a></li>
                                        <li><a href="examples.html">Examples</a></li>
                                        <li><a href="about.html">About MOAP</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </header>

                <section id="banner" class="wrapper style5 special">
                    <div class="inner">
                        <center>
                            <img src="images/moap-cropped.png" style='width:50%;' />
              </br>
              <p>Your personal algorithm design assistant</p>
<div class="6u 12u$(xsmall)">
                                <form action="solve.php" method="post">
                                <input type="text" name="moap-input" value="<?php echo $_POST["moap-input"];?>" >
                                <input type="submit">
                                </form>
                            </div>
<?php
$cmd = "java -jar /home/youc/MOAP.jar \"" . $_POST["moap-input"] . "\" 2>&1";
#echo $_POST["moap-input"]."\n";
echo "<pre>".shell_exec($cmd)."</pre>";
?>
                        </center>
                    </div>
                </section>
                <footer id="footer" class="wrapper style5 special">
                    <ul class="icons">
                        <li><a href="http://www.rayokadaparker.com/" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                    </ul>
                    <ul class="copyright">
                        <li>MOAP Inc.</li>
                    </ul>
                </footer>

        </div>


    <!-- Scripts -->
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
  </body>

</html>
