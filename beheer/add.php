<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/Content.class.php');

echo "1";

if (isset($_POST['verzend']) && !empty($_POST['verzend'])) {
    if (!empty($_POST['titel']) && !empty($_POST['inhoud'])) {
        $contentCreate = new Content();
        $contentCreate->setMSTitel($_POST['titel']);
        $contentCreate->setMSInhoud($_POST['inhoud']);
        echo "2";

        try {
            if ($contentCreate->addContent()) {

            }
        } catch (Exception $e) {
            $errorException = $e->getMessage();
            $feedback = buildFeedbackBox("danger", $errorException);
        }
    } else if (isset($_POST['titel']) && empty($_POST['titel'])) {
        $feedback = buildFeedbackBox("danger", "U heeft geen paginatitel ingevuld.");
    } else if (isset($_POST['inhoud']) && empty($_POST['wachtwoord'])) {
        $feedback = buildFeedbackBox("danger", "U heeft geen inhoud aangemaakt");
    }

}



?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inhoud toevoegen</title>
    <?php include_once("inc/header.inc.php"); ?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 250,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media',
            toolbar2: 'print preview',
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
    <script>tinymce.init({selector: 'textarea'});</script>

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

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

        <div class="form-group">
            <label class="login-field-icon fui-user" for="titel"><span
                    class="labeltext">Titel</span></label>
            <input type="text" name="titel" id="titel" class="form-control login-field"
                   value="<?php echo isset($_POST['titel']) ? htmlspecialchars($_POST['titel']) : '' ?>"
                   placeholder="Titel van de pagina" required
                   title="Vul je e-mailadres in." autofocus>
        </div>

        <div class="form-group">
            <label class="login-field-icon fui-user" for="inhoud"><span
                    class="labeltext">Inhoud</span></label>
            <textarea required name="inhoud"
                      id="inhoud"><?php echo isset($_POST['inhoud']) ? $_POST['inhoud'] : '' ?></textarea>
        </div>
        <input type="submit" name="verzend" value="Opslaan" class="btn btn-primary">
        <a href="#" class="btn btn-danger">Annuleren</a>
    </form>
</div>

</body>
</html>