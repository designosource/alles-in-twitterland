<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Pagina wijzigen</title>
    <?php include_once("inc/header.inc.php"); ?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({selector: 'textarea'});</script>
</head>
<body class="dashboard">
<div class="container">
    <a href="index.php">Keer terug naar het dashboard</a>
    <div class="btn-group-vertical pull-right">
        <a href="logout.php" class="text-right">Uitloggen</a>
    </div>
    <h1>Pagina wijzigen</h1>
    <form action="" method="POST">

        <div class="form-group">
            <label class="login-field-icon fui-user" for="titel"><span
                    class="labeltext">Paginatitel</span></label>
            <input type="text" name="titel" id="titel" class="form-control login-field"
                   value="<?php echo isset($_POST['gebruikeremail']) ? htmlspecialchars($_POST['gebruikeremail']) : '' ?>"
                   placeholder="Titel van de pagina" required
                   title="Vul je e-mailadres in." autofocus>
        </div>

        <div class="form-group">
            <label class="login-field-icon fui-user" for="inhoud"><span
                    class="labeltext">Inhoud</span></label>
            <textarea rows="10" required name="inhoud"></textarea>
        </div>
        <input type="submit" name="verzend" value="Wijzigen" class="btn btn-primary">
        <input type="submit" name="verzend" value="Annuleren" class="btn btn-danger">
    </form>
</div>
</body>
</html>