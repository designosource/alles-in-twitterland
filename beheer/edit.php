<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/Db.class.php');
include_once('classes/Content.class.php');

    $error = false;

    if(isset($_GET['edit']) && !empty($_GET['edit'])){
        $getSelectedContent = new Content();
        $getSelectedContent->setMSId($_GET['edit']);
        $showPosts = $getSelectedContent->getSelectedContent();

        if(empty($showPosts) || count($showPosts) != 1){
            $error = true;
            $feedback = buildFeedbackBox("warning", "er is geen correcte pagina id meegegeven. Het systeem weet niet welke pagina u wenst te wijzigen. Klik op de link wijzigen naast een pagina in het <a href='index.php'>dashboard</a>.");
        }

    }else{
        $error = true;
        $feedback = buildFeedbackBox("warning", "er is geen correcte pagina id meegegeven. Het systeem weet niet welke pagina u wenst te wijzigen. Klik op de link wijzigen naast een pagina in het <a href='index.php'>dashboard</a>.");
    }





if (isset($_POST['verzend']) && !empty($_POST['verzend'])) {
    $contentCreate = new Content();
    $contentCreate->setMSTitel($_POST['titel']);
    $contentCreate->setMSInhoud($_POST['inhoud']);
    if(isset($_GET['edit']) && !empty($_GET['edit'])){
        $contentCreate->setMSId($_GET['edit']);
    }

    try {
        if ($contentCreate->editContent()) {
            $feedback = buildFeedbackBox("success", "De pagina is gewijzigd.");
            $getSelectedContent = new Content();
            $getSelectedContent->setMSId($_GET['edit']);
            $showPosts = $getSelectedContent->getSelectedContent();
        }
    } catch (Exception $e) {
        $errorException = $e->getMessage();
        $feedback = buildFeedbackBox("danger", $errorException);
    }
} else if (isset($_POST['verzend']) && empty($_POST['Opslaan'])) {
    $feedback = buildFeedbackBox("danger", "controleer of u het veld paginatitel en inhoud heeft ingevuld.");
}



?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pagina wijzigen</title>
    <?php include_once("inc/header.inc.php"); ?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="../js/wysiwyg.js"></script>
</head>
<body class="dashboard">
<div class="container">
    <a href="index.php">Keer terug naar het dashboard</a>
    <div class="btn-group-vertical pull-right">
        <a href="logout.php" class="text-right">Uitloggen</a>
    </div>
    <h1>Pagina wijzigen</h1>

    <?php
    //toon errorboodschap
    if (!empty($feedback)) {
        echo $feedback;
    }
    ?>

    <?php if($error === false): ?>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

            <div class="form-group">
                <label class="login-field-icon" for="titel"><span class="labeltext">Paginatitel</span></label>
                <input type="text" name="titel" id="titel" class="form-control login-field"
                       value="<?php echo isset($showPosts[0]['title']) ? htmlspecialchars($showPosts[0]['title']) : '' ?>"
                       placeholder="Titel van de pagina" required
                       title="Vul je e-mailadres in." autofocus>
            </div>

            <div class="form-group">
                <label class="login-field-icon" for="inhoud"><span class="labeltext">Inhoud</span></label>
                <textarea rows="10" required name="inhoud"><?php echo isset($showPosts[0]['body']) ? $showPosts[0]['body'] : '' ?></textarea>
            </div>
            <input type="submit" name="verzend" value="Wijzigen" class="btn btn-primary">
            <a href="index.php" class="btn btn-danger">Annuleren</a>
        </form>

    <?php endif; ?>

</div>
</body>
</html>