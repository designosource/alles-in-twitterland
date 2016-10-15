<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/Content.class.php');


if (isset($_POST['verzend']) && !empty($_POST['verzend'])) {
    $contentCreate = new Content();
    $contentCreate->setMSTitel($_POST['titel']);
    $contentCreate->setMSInhoud($_POST['inhoud']);

    try {
        if ($contentCreate->addContent()) {
            $feedback = buildFeedbackBox("success", "Pagina " . htmlspecialchars($_POST['titel']) . " is aangemaakt.");
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
    <title>Inhoud toevoegen</title>
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

    <h1>Nieuwe pagina aanmaken</h1>

    <?php
    //toon errorboodschap
    if (!empty($feedback)) {
        echo $feedback;
    }
    ?>

    <form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

        <div class="form-group">
            <label class="login-field-icon" for="titel"><span class="labeltext">Titel</span></label>
            <input type="text" name="titel" id="titel" class="form-control login-field"
                   value="<?php echo isset($_POST['titel']) ? htmlspecialchars($_POST['titel']) : '' ?>"
                   placeholder="Titel van de pagina" required
                   title="Vul je e-mailadres in." autofocus >
        </div>

        <div class="form-group">
            <label class="login-field-icon" for="inhoud"><span class="labeltext">Inhoud</span></label>
            <textarea required name="inhoud"
                      id="inhoud"><?php echo isset($_POST['inhoud']) ? $_POST['inhoud'] : '' ?>
            </textarea>
        </div>


        <input type="submit" name="verzend" value="Opslaan" class="btn btn-primary">
        <a href="index.php" class="btn btn-danger">Annuleren</a>
    </form>
</div>

</body>
</html>