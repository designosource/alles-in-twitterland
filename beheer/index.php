<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="description" content="Login met je IMDstagram account.">
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
        <tr>
            <td><a href="#">Mijn eerste pagina</a></td>
            <td>14/10/2016 23:30</td>
            <td><a href="edit.php">Wijzigen</a></td>
            <td><a href="#">Verwijderen</a></td>
        </tr>
        </tbody>
    </table>


</body>
</html>