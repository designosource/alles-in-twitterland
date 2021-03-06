<?php

?><!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Alles in Twitterland</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.0.min.js"></script>

    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Overzicht van nieuwsartikels en perspagina's over het boek Alles in Twitterland.">

    <meta property="og:title" content="Alles in Twitterland"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="1579446289031881"/>
    <meta property="og:image" content="http://www.allesintwitterland.be/images/boek.png"/>
    <meta property="og:site_name" content="Alles in Twitterland"/>
    <meta property="og:description"
          content="Een boek over Twitter. Geschreven door Bart De Clerck & Luc Colemont. Lees het verhaal van 14 bekende Twitteraars die in dit boek vertellen over hun avonturen met het blauwe vogeltje."/>
    <meta property="og:site_name" content="Alles in Twitterland"/>

    <meta property="og:url" content="http://www.allesintwitterland.be/"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@LucColemont"/>
    <meta name="twitter:title" content="Alles in Twitterland"/>
    <meta name="twitter:description"
          content="Lees het verhaal van 14 bekende Twitteraars die in dit boek vertellen over hun avonturen met het blauwe vogeltje. Geschreven door Bart De Clerck & Luc Colemont."/>
    <meta name="twitter:image" content="http://www.allesintwitterland.be/images/boek.png"/>

    <?php include_once("inc/favicons.inc.php"); ?>

</head>
<body class="body-container">

<header>
    <div class="header-container">

        <?php include_once('inc/navigation.inc.php'); ?>

        <div class="header-text-container">
            <div class="header-text">
                <h1>Alles in Twitterland</h1>
                <h2 class="header">Door <a href="https://twitter.com/bartdecl">@Bart de Clerck</a> en <a
                        href="https://twitter.com/LucColemont">@Luc Colemont</a></h2>
                <p class="stand-out-text">Twitter ligt de laatste tijd wat onder vuur. En toch is het een uniek middel
                    om een netwerk op te
                    bouwen, kennis te delen, mensen te leren kennen, op de hoogte te blijven van het laatste nieuws,
                    informatie te verspreiden en op te doen.</p>
                <div class="header-CTAs">
                    <div class="header-callToAction">
                        <a href="http://www.uitgeverijvrijdag.be/cataloog/non-fictie/alles-in-twitterland"
                           class="CTA-button">Boek aankopen</a>
                        <a href="/nieuws.php" class="CTA-button" id="persNieuwsCTA">Pers &amp; Nieuws</a>
                    </div>
                    <div class="header-price">
                        Vanaf &euro;19,95 | Verkrijgbaar in België en Nederland.
                    </div>
                </div>
            </div>

            <div class="header-image">

            </div>
        </div>
    </div>
</header>

<section class="section-aboutUs">
    <div class="aboutUs-text">
        <div class="aboutUs-text-container">
            <h2>Nog een boek over Twitter?</h2>
            <h3 class="aboutUs-text-sub">Zeg nooit, nooit.</h3>
            <p class="stand-out-text extra-content">De kracht van de sociale media wordt nog steeds door veel mensen onderschat. De
                sterkte van het
                ‘vertel-het-verder’-effect van een retweet, is uniek aan Twitter.
            </p>
            <p class="stand-out-text">
                Alles in Twitterland laat je de wondere wereld van tweets, retweets, favorieten en hashtags door een
                andere bril zien.
            </p>
        </div>
    </div>
    <img class="aboutUs-picture" src="images/Auteursfoto-cropped.jpg"
         alt="Auteurs van het boek, Bart de Clerck en Luc Colemont">
</section>

<section class="section-bv">
    <div class="bvItem-title">
        <div class="bvItem-title-container">
            <h2>Bekende Twitteraars</h2>
            <h3>14 Twitteraars vertellen over hun avonturen met het blauwe vogeltje.</h3>
            <p class="copyright-fotos">Foto's &copy; Johan Swinnen, 2016.</p>
        </div>
    </div>
    <div class="bvItem" id="item1">
        <a href="https://twitter.com/GeertNoels">
            <div class="bvItem-image">
                <img src="images/bv/noels.png" alt="Geert Noels" title="Geert Noels">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Ik ben bereid te betalen voor twitter&quot; - <a
                href="https://twitter.com/GeertNoels">@GeertNoels</a>
        </div>
    </div>
    <div class="bvItem" id="item2">
        <a href="https://twitter.com/verschuerenmic1">
            <div class="bvItem-image">
                <img src="images/bv/verschueren.png" alt="Michel Verschueren" title="Michel Verschueren">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Het geheim van 140 tekens op rijm&quot; - <a
                href="https://twitter.com/verschuerenmic1">@verschuerenmic1</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/slk8500">
            <div class="bvItem-image">
                <img src="images/bv/lammertyn.png" alt="Stefaan Lammertyn" title="Stefaan Lammertyn">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Door Twitter veel kennis en kennissen opgedaan&quot; - <a
                href="https://twitter.com/slk8500">@slk8500</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/jokevandevelde1">
            <div class="bvItem-image">
                <img src="images/bv/vandevelde.png" alt="Joke van de Velde" title="Joke van de Velde">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Wie geluk wilt oogsten, moet humor zaaien&quot; - <a href="https://twitter.com/jokevandevelde1">@jokevandevelde1</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/JillPeetersWX">
            <div class="bvItem-image">
                <img src="images/bv/peeters.png" alt="Jill Peeters" title="Jill Peeters">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Onze koning op Snapchat? Dat zou toch tof zijn?&quot; - <a href="https://twitter.com/JillPeetersWX">@JillPeetersWX</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/FranckenTheo">
            <div class="bvItem-image">
                <img src="images/bv/francken.png" alt="Theo Francken" title="Theo Francken">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Dat je ermee moet oppassen, moet je mij niet vertellen&quot; - <a
                href="https://twitter.com/FranckenTheo">@FranckenTheo</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/LucColemon">
            <div class="bvItem-image">
                <img src="images/bv/colemont.png" alt="Luc Colemont" title="Luc Colemont">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Twitter heeft mijn leven veranderd&quot; - <a
                href="https://twitter.com/LucColemont">@LucColemont</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/vadderiVRT">
            <div class="bvItem-image">
                <img src="images/bv/vadder.png" alt="Ivan de Vadder" title="Ivan de Vadder">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Het moet van een ranzige bar terug een gezellig café worden&quot; - <a
                href="https://twitter.com/vadderiVRT">@vadderiVRT</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/Eva_Mouton">
            <div class="bvItem-image">
                <img src="images/bv/mouton.png" alt="Eva Mouton" title="Eva Mouton">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Het is voor mij de koffiemachine waar ik grapjes maak met de collega’s&quot; - <a
                href="https://twitter.com/Eva_Mouton">@Eva_Mouton</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/Youssef_Kobo">
            <div class="bvItem-image">
                <img src="images/bv/kobo.png" alt="Youssef Kobo" title="Youssef Kobo">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Twitter is mijn megafoon&quot; - <a href="https://twitter.com/Youssef_Kobo">@Youssef_Kobo</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/kristofcalvo">
            <div class="bvItem-image">
                <img src="images/bv/calvo.png" alt="Kristof Calvo" title="Kristof Calvo">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Twitter is mijn virtuele studiedienst&quot; - <a
                href="https://twitter.com/kristofcalvo">@kristofcalvo</a>
        </div>
    </div>

    <div class="bvItem">
        <a href="https://twitter.com/vpieters">
            <div class="bvItem-image">
                <img src="images/bv/pieters.png" alt="Veerle Pieters" title="Veerle Pieters">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Geen last van storende advertenties dankzij Tweetbot&quot; - <a href="https://twitter.com/vpieters">@vpieters</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/p_vanostaeyen">
            <div class="bvItem-image">
                <img src="images/bv/vanostaeyen.png" alt="Pieter Van Ostaeyen" title="Pieter Van Ostaeyen">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Begonnen met twaalf keer meer volgers dan Christus&quot; - <a
                href="https://twitter.com/p_vanostaeyen">@p_vanostaeyen</a>
        </div>
    </div>
    <div class="bvItem">
        <a href="https://twitter.com/Wielemie">
            <div class="bvItem-image">
                <img src="images/bv/vervoort.png" alt="Marieke Vervoort" title="Marieke Vervoort">
            </div>
        </a>
        <div class="bvItem-text">
            &quot;Wat moeten we anders? Allemaal Pokémons gaan vangen, of wat?&quot; - <a
                href="https://twitter.com/Wielemie">@Wielemie</a>
        </div>
    </div>
</section>
<section class="section-social">
    <div class="social-container">
        <div class="social-tweets">
            <a href="https://goo.gl/WW6zRi" class="button-tweet" target="_blank">
                #AllesInTwitterland
            </a>
            <a class="twitter-timeline" href="https://twitter.com/hashtag/allesintwitterland"
               data-widget-id="784298323947597824">Tweets over #allesintwitterland</a>
            <script>!function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.async = true;
                    js.src = p + "://platform.twitter.com/widgets.js";
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, "script", "twitter-wjs");</script>
        </div>

        <div class="social-text">
            <div class="social-invitation">
                <h2>Let's get social</h2>
                <h3>13/10/2016 | 20.00u | Kronenburgstraat 62, Antwerpen</h3>
                <img src="images/uitnodiging.png" alt="Uitnodiging presentatie boek - Alles In Twitterland"
                     class="social-invitation-image">
            </div>
            <!--<div class="social-invitation videoContainer">
                <iframe style="margin-top:20px;"
                        src="https://www.youtube.com/embed/videoseries?list=PLFgquLnL59alCl_2TQvOiD5Vgm1hCaGSI"
                        frameborder="0" allowfullscreen></iframe>
            </div>-->
        </div>
    </div>
</section>
<?php include_once("inc/footer.inc.php"); ?>

</body>
</html>