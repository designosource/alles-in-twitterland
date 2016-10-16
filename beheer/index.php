<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/Db.class.php');
include_once('classes/Content.class.php');

//inhoud ophalen
$content = new Content();
$showPosts = $content->getContent();

if(isset($_GET['success'])){
    $feedback = buildFeedbackBox("success", "De geselecteerde pagina is verwijderd.");
}

//inhoud wissen
if (isset($_GET['delete']) && !empty($_GET['delete'])) {
    $contentDelete = new Content();
    $contentDelete->setMSId($_GET['delete']);
    try {
        if ($contentDelete->deleteContent()) {
                header('Location: '.$_SERVER['PHP_SELF'].'?success=true');
            die;
        }
    } catch (Exception $e) {
        $errorException = $e->getMessage();
        $feedback = buildFeedbackBox("danger", $errorException);
    }
} else if (isset($_GET['delete']) && empty($_GET['delete'])) {
    $feedback = buildFeedbackBox("danger", "Er is geen pagina-id meegegeven. De geselecteerde pagina is niet gewist.");
}

?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <?php include_once('inc/header.inc.php'); ?>
</head>
<body class="dashboard">
<div class="container">
    <a href="/index.php" target="_blank">Keer terug naar de website</a>
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
                <td><a href="../nieuws.php?artikel=<?php echo htmlspecialchars($showPost['content_id']); ?>"><?php echo htmlspecialchars($showPost['title']); ?></a></td>
                <td><?php echo htmlspecialchars($showPost['created']); ?></td>
                <td><a href="edit.php?edit=<?php echo htmlspecialchars($showPost['content_id']); ?>">Wijzigen</a></td>

                <td><a href="javascript:confirmDelete('?delete=<?php echo htmlspecialchars($showPost['content_id']); ?>')" style="color: red;">Verwijderen</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>

    <script>
        function confirmDelete(delUrl) {
            if (confirm("Weet je zeker dat je de geselecteerde pagina definitief wil wissen?")) {
                document.location = delUrl;
            }
        }

    </script>

</body>
</html>