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
        <header>
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
            <div class="intro-title">
                <h1>
                    H.A.M
                </h1>
            </div>
        </header>

        <section class="intro-site clearfix">
            <div class="intro-image wow bounceInUp">
                <img src="img/intro-afbeelding.png"/>
            </div>
            <div class="click-down">
                <a href="#explain" id="explain"></a>
            </div>
        </section>
        <section class="explain-product clearfix" name="explain" id="explain">
            <div class="col-left">
                <div class="text wow slideInLeft">
                    <h1>
                        Wat is de H.A.M?
                    </h1>
                    <p>
                        H.A.M staat kort voor Hulp Assistent Mediamarkt. Het is een rood doosje waarmee je kan aangeven of je wel of niet geholpen wilt worden door een verkoper. Niet iedereen heeft namelijk de behoefte om geholpen te worden en wilt tijdens zijn bezoek aan de Mediamarkt gewoon rustig op z'n gemakje rond kijken zonder dat hij/zij benaderd wordt door een verkoper. Het kan namelijk voor bepaalde ergenissen zorgen als je op elke afdeling de zelfde vraagt krijgt, om deze ergenis weg te halen is dit doosje ideaal! Tevens is het ook voor mensen die juist wel geholpen willen worden en kunnen dat hiermee ook aangeven. 
                    </p>
                </div>
            </div>
            <div class="col-right" style="padding-right: 0px;">
                <div class="image wow slideInRight">
                    <img src="img/intro-afbeelding.png"/>
                </div>
            </div>
        </section>
        <section class="function-product clearfix" name="function" id="function">
            <div class="col-left" style="padding-left: 0px;">
                <div class="image wow slideInLeft">
                    <img src="img/ontvanger.png"/>
                </div>
            </div>
            <div class="col-right">
                <div class="text wow slideInRight">
                    <h1>
                        Hoe werkt het?
                    </h1>
                    <p>
                        Zodra je op het knopje drukt dat voor het doosje zit veranderd de kleur van groen naar rood of andersom. Als hij op groen staat en je loopt een afdeling op word er door het doosje dat hiernaast staat gekeken of hij ook daadwerkelijk op groen staat. Is dit het geval dan gaat er een geluidje af waardoor de verkoper weet dat er iemand hulp nodig heeft op zijn afdeling. Staat de kleur op rood? Dan gebeurt er helemaal niks en dan hoeft de verkoper ook niks te ondernemen. 
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
                        Mochten er nog eventuele vragen zijn of is er iets nog niet helemaal duidelijk? Twijfel dan niet en neem vrijblijvend contact met ons op.
                    </p>
                </div>                
            </div>
            <div class="col-right">
                <?php
                session_start();
                // E-mailadres van de ontvanger
                $mail_ontv = 'beusekampers17@gmail.com'; // <<<----- voer jouw e-mailadres hier in!

                // Speciale checks voor naam en e-mailadres
                if ($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    // naam controle
                    if (empty($_POST['naam']))
                        $naam_fout = 1;
                    // e-mail controle
                    if (function_exists('filter_var') && !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
                            $email_fout = 1;
                    // antiflood controle
                    if (!empty($_SESSION['antiflood']))
                    {
                        $seconde = 20; // 20 seconden voordat dezelfde persoon nog een keer een e-mail mag versturen
                        $tijd = time() - $_SESSION['antiflood'];
                        if($tijd < $seconde)
                            $antiflood = 1;
                    }
                }

                // Kijk of alle velden zijn ingevuld - naam mag alleen uit letters bestaan en het e-mailadres moet juist zijn
                if (($_SERVER['REQUEST_METHOD'] == 'POST' && (!empty($antiflood) || empty($_POST['naam']) || !empty($naam_fout) || empty($_POST['mail']) || !empty($email_fout) || empty($_POST['bericht']) || empty($_POST['onderwerp']))) || $_SERVER['REQUEST_METHOD'] == 'GET')
                {
                    if ($_SERVER['REQUEST_METHOD'] == 'POST')
                    {
                        if (!empty($naam_fout))
                            echo '<p>Uw naam is niet ingevuld.</p>';
                        elseif (!empty($email_fout))
                            echo '<p>Uw e-mailadres is niet juist.</p>';
                        elseif (!empty($antiflood))
                            echo '<p>U mag slechts &eacute;&eacute;n bericht per ' . $seconde . ' seconde versturen.</p>';
                        else
                            echo '<p>U bent uw naam, e-mailadres, onderwerp of bericht vergeten in te vullen.</p>';
                    }
                        
                  // HTML e-mail formlier
                  echo '<form method="post" action="' . $_SERVER['REQUEST_URI'] . '" />
                  <p>
                      <input placeholder="Naam" type="text" id="naam" name="naam" value="' . (isset($_POST['naam']) ? htmlspecialchars($_POST['naam']) : '') . '" /><br />
                      
                      <input placeholder="E-mail" type="text" id="mail" name="mail" value="' . (isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : '') . '" /><br />
                      
                      <input placeholder="Onderwerp" type="text" id="onderwerp" name="onderwerp" value="' . (isset($_POST['onderwerp']) ? htmlspecialchars($_POST['onderwerp']) : '') . '" /><br />
                      
                      <textarea placeholder="Bericht" id="bericht" name="bericht">' . (isset($_POST['bericht']) ? htmlspecialchars($_POST['bericht']) : '') . '</textarea><br />
                      
                      <button type="submit" name="submit" value=" Versturen ">Versturen</button>
                  </p>
                  </form>';
                }
                // versturen naar
                else
                {      
                  // set datum
                  $datum = date('d/m/Y H:i:s');
                    
                  $inhoud_mail = "===================================================\n";
                  $inhoud_mail .= "Ingevulde contact formulier " . $_SERVER['HTTP_HOST'] . "\n";
                  $inhoud_mail .= "===================================================\n\n";
                  
                  $inhoud_mail .= "Naam: " . htmlspecialchars($_POST['naam']) . "\n";
                  $inhoud_mail .= "E-mail adres: " . htmlspecialchars($_POST['mail']) . "\n";
                  $inhoud_mail .= "Bericht:\n";
                  $inhoud_mail .= htmlspecialchars($_POST['bericht']) . "\n\n";
                    
                  $inhoud_mail .= "Verstuurd op " . $datum . " via het IP adres " . $_SERVER['REMOTE_ADDR'] . "\n\n";
                    
                  $inhoud_mail .= "===================================================\n\n";
                  
                  // --------------------
                  // spambot protectie
                  // ------
                  // van de tutorial: http://www.phphulp.nl/php/tutorial/beveiliging/spam-vrije-contact-formulieren/340/
                  // ------
                  
                  $headers = 'From: ' . htmlspecialchars($_POST['naam']) . ' <' . $_POST['mail'] . '>';
                  
                  $headers = stripslashes($headers);
                  $headers = str_replace('\n', '', $headers); // Verwijder \n
                  $headers = str_replace('\r', '', $headers); // Verwijder \r
                  $headers = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $headers)); // Slashes van quotes
                  
                  $_POST['onderwerp'] = str_replace('\n', '', $_POST['onderwerp']); // Verwijder \n
                  $_POST['onderwerp'] = str_replace('\r', '', $_POST['onderwerp']); // Verwijder \r
                  $_POST['onderwerp'] = str_replace("\"", "\\\"", str_replace("\\", "\\\\", $_POST['onderwerp'])); // Slashes van quotes
                  
                  if (mail($mail_ontv, $_POST['onderwerp'], $inhoud_mail, $headers))
                  {
                      // zorg ervoor dat dezelfde persoon niet kan spammen
                      $_SESSION['antiflood'] = time();
                      
                      echo '
                        <div class="succes-contact" style="display: table-cell; vertical-align: middle;">
                          <h1>Contactformulier is verzonden</h1>
                          
                          <p>
                            Bedankt voor het invullen van het contactformulier. We zullen zo spoedig mogelijk contact met u opnemen.
                          </p>
                        </div>';
                  }
                  else
                  {
                      echo '<h1>Het contactformulier is niet verzonden</h1>
                      
                      <p><b>Onze excuses.</b> Het contactformulier kon niet verzonden worden.</p>';
                  }
                }
                ?>
            </div>
        </section>

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
 