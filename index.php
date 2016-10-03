<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate-wow.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav>
            <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul id="menu-list">
                <li>
                    <a href="#explain" id="explain">
                        Wat is het?
                    </a>
                </li>
                <li>
                    <a href="#function" id="function">
                        Hoe werkt het?
                    </a>
                </li>
                <li>
                    <a href="#contact" id="contact">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <section class="intro-site clearfix">
            <div class="intro-title wow bounceInDown">
                <h1>
                    H.A.M
                </h1>
                <span>
                    De Hulp Assistent Mediamarkt, een winkel assistent die wel helpt!
                </span>
            </div>
            <div class="click-down">
                <a href="#explain" id="explain"></a>
            </div>
        </section>
        <section class="explain-product clearfix" name="explain" id="explain">
            <div class="col-left">
                <div class="text wow slideInLeft">
                    <h1>
                        Wat is het?
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="col-right">
                
            </div>
        </section>
        <section class="function-product clearfix" name="function" id="function">
            <div class="col-left">
                
            </div>
            <div class="col-right">
                <div class="text wow slideInRight">
                    <h1>
                        Hoe werkt het?
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </section>
        <section class="contact clearfix" name="contact" id="contact">
            <div class="col-left">
                <div class="text wow slideInLeft">
                    <h1>
                        Contact
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>                
            </div>
            <div class="col-right">
                <form method="post" action="contactengine.php">
                    <input type="text" name="name" placeholder="Naam"/>
                    <input type="text" name="Subject" placeholder="Onderwerp"/>
                    <textarea name="Message" id="Message" placeholder="Type hier uw bericht"></textarea>
                    <button type="submit" name="submit" value="Submit">
                        Verzenden
                    </button> 
                </form>
            </div>
        </section>

          <!--   <form method="post" action="contactengine.php">
                <input type="submit" name="submit" value="Submit" class="submit-button" />
            </form>
           -->  

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
