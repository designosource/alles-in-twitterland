<?php
include_once('beheer/inc/feedbackbox.inc.php');
include_once('beheer/classes/Db.class.php');
include_once('beheer/classes/Content.class.php');


$content = new Content();
$showPosts = $content->getContent();


?><!DOCTYPE html>
<html lang="nl">
<head>

    <meta charset="UTF-8">
    <title>Pers & nieuws</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.0.min.js"></script>

    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Overzicht van gepubliceerde pers- en nieuwsartikels over het boek Alles in Twitterland.">

    <meta property="og:title" content="Alles in Twitterland pers & nieuws"/>
    <meta property="og:type" content="website"/>
    <meta property="fb:app_id" content="1579446289031881"/>
    <meta property="og:image" content="http://www.allesintwitterland.be/images/boek.png"/>
    <meta property="og:site_name" content="Alles in Twitterland"/>
    <meta property="og:description"
          content="Een boek over Twitter. Geschreven door Bart De Clerck & Luc Colemont. Lees het verhaal van 14 bekende Twitteraars die in dit boek vertellen over hun avonturen met het blauwe vogeltje."/>
    <meta property="og:site_name" content="Alles in Twitterland"/>

    <meta property="og:url" content="http://www.allesintwitterland.be/nieuws.php"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@LucColemont"/>
    <meta name="twitter:title" content="Alles in Twitterland"/>
    <meta name="twitter:description"
          content="Lees het verhaal van 14 bekende Twitteraars die in dit boek vertellen over hun avonturen met het blauwe vogeltje. Geschreven door Bart De Clerck & Luc Colemont."/>
    <meta name="twitter:image" content="http://www.allesintwitterland.be/images/boek.png"/>

    <?php include_once("inc/favicons.inc.php"); ?>


</head>
<body class="body-nieuws-container">


<?php if (!isset($_GET['artikel']) || empty($_GET['artikel'])): ?>
<header>
    <div class="header-container">
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/nieuws.php" class="current-page">Pers &amp; nieuws</a></li>
            </ul>
        </nav>

        <article>
            <section class="section-nieuws">
                <div class="nieuws-text">
                    <div class="aboutUs-text-container">
                        <h1>Pers &amp; nieuws</h1>
                        <h2>'Alles in Twitterland' in het nieuws</h2>
                    </div>

                    <div class="nieuws-container">

                        <?php foreach ($showPosts as $showPost): ?>
                            <section class="nieuws-article">
                                <div class="nieuws-article-text">
                                    <h3><a href="?artikel=<?php echo htmlspecialchars($showPost['content_id']); ?>"><?php echo htmlspecialchars($showPost['title']); ?></a></h3>
                                    <p class="nieuws-article-caption"><?php $small = html_entity_decode(substr($showPost['body'], 0, 250));
                                        echo $small . "..."; ?></p>
                                </div>
                            </section>
                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
        </article>
    </div>
</header>


<?php endif; ?>


<?php include_once("inc/footer.inc.php"); ?>

</body>
</html>