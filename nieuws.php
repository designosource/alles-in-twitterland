<?php
include_once('beheer/inc/feedbackbox.inc.php');
include_once('beheer/classes/Db.class.php');
include_once('beheer/classes/Content.class.php');


$content = new Content();
if (!isset($_GET['artikel']) || empty($_GET['artikel'])) {
    $showPosts = $content->getContent();
} else {
    $content->setMSId($_GET['artikel']);
    $showPosts = $content->getSelectedContent();
}


?><!DOCTYPE html>
<html lang="nl">
<head>

    <meta charset="UTF-8">
    <title>
        <?php if (!isset($_GET['artikel']) || empty($_GET['artikel'])): ?>
            Pers & nieuws
        <?php endif; ?>

        <?php if (isset($_GET['artikel']) && !empty($_GET['artikel'])): ?>
            <?php echo $showPosts[0]['title']; ?>
        <?php endif; ?>

    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.0.min.js"></script>

    <meta name=viewport content="width=device-width, initial-scale=1">

    <?php if (!isset($_GET['artikel']) || empty($_GET['artikel'])): ?>
        <meta name="description"
              content="Overzicht van gepubliceerde pers- en nieuwsartikels over het boek Alles in Twitterland.">
        <meta property="og:title" content="Alles in Twitterland pers & nieuws"/>
        <meta property="og:type" content="website"/>
        <meta property="fb:app_id" content="1579446289031881"/>
        <meta property="og:image" content="http://www.allesintwitterland.be/images/boek.png"/>
        <meta property="og:site_name" content="Alles in Twitterland"/>
        <meta property="og:description"
              content="Overzicht van gepubliceerde pers- en nieuwsartikels over het boek Alles in Twitterland."/>

        <meta property="og:url" content="http://www.allesintwitterland.be/nieuws.php"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@LucColemont"/>
        <meta name="twitter:title" content="Alles in Twitterland"/>
        <meta name="twitter:description"
              content="Overzicht van gepubliceerde pers- en nieuwsartikels over het boek Alles in Twitterland."/>
        <meta name="twitter:image" content="http://www.allesintwitterland.be/images/boek.png"/>
    <?php endif; ?>

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

            <section class="section-nieuws">
                <div class="nieuws-text">
                    <div class="aboutUs-text-container">
                        <h1>Pers &amp; Nieuws</h1>
                        <h2>'Alles in Twitterland' in het nieuws</h2>
                        <div class="nieuws-container">
                            <?php foreach ($showPosts as $showPost): ?>
                                <div class="nieuws-article">
                                    <div class="nieuws-article-text">
                                        <h3>
                                            <a href="?artikel=<?php echo htmlspecialchars($showPost['content_id']); ?>"><?php echo htmlspecialchars($showPost['title']); ?></a>
                                        </h3>
                                        <p class="nieuws-article-caption"><?php $small = substr($showPost['body'], 0, 250);
                                            echo $small . "..."; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </section>

        </div>
    </header>
<?php endif; ?>


<?php if (isset($_GET['artikel']) && !empty($_GET['artikel'])): ?>
    <header>
        <div class="header-container">
            <nav>
                <ul>
                    <li><a href="/index.php">Home</a></li>
                    <li><a href="/nieuws.php" class="current-page">Pers &amp; nieuws</a></li>
                </ul>
            </nav>

            <section class="section-nieuws">
                <div class="nieuws-text">

                    <?php foreach ($showPosts as $showPost): ?>

                        <h1><?php echo htmlspecialchars($showPost['title']); ?></h1>
                        <div class="nieuws-container bodyinput">
                            <?php echo $showPost['body']; ?>
                        </div>
                    <?php endforeach; ?>

                </div>
            </section>

        </div>
    </header>
<?php endif; ?>


<?php include_once("inc/footer.inc.php"); ?>

</body>
</html>