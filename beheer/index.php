<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/Db.class.php');
include_once('classes/Content.class.php');

//inhoud ophalen
$content = new Content();
$showPosts = $content->getContent();

?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <?php include_once('inc/header.inc.php'); ?>
</head>
<body class="dashboard">
<div class="container">
    <a href="/index.html" target="_blank">Keer terug naar de website</a>
    <div class="btn-group-vertical pull-right">
        <a href="logout.php" class="text-right">Uitloggen</a>
    </div>
    <h1>Alles in Twitterland beheren</h1>

    <?php
    //toon errorboodschap
    if (!empty($feedback)) {
        echo $feedback;
    }
    ?>

    <h2>Pers- en nieuwsartikels</h2>
    <a href="add.php" class="btn btn-primary">Maak een nieuwe pagina aan</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Paginatitel</th>
            <th>Aanmaakdatum</th>
            <th>Wijzigen</th>
            <th>Verwijderen</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($showPosts as $showPost): ?>
            <tr>
                <td><a href="#"><?php echo htmlspecialchars($showPost['title']); ?></a></td>
                <td><?php echo htmlspecialchars($showPost['created']); ?></td>
                <td><a href="edit.php">Wijzigen</a></td>
                <td><a href="#">Verwijderen</a></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</body>
</html>