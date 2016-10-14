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
    <a href="/index.html" target="_blank">Keer terug naar de website</a> -
    <a href="logout.php">Uitloggen</a>
    <h1>Alles in Twitterland beheren</h1>

    <!--<form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
        //toon errorboodschap
        if (!empty($feedback)) {
            echo $feedback;
        }
        ?>
        <div class="form-group">
            <input type="email" name="gebruikeremail" id="gebruikeremail" class="form-control login-field"
                   value="<?php echo isset($_POST['gebruikeremail']) ? htmlspecialchars($_POST['gebruikeremail']) : '' ?>"
                   placeholder="E-mailadres" required
                   title="Vul je e-mailadres in." autofocus>
            <label class="login-field-icon fui-user" for="gebruikeremail"><span class="labeltext">Gebruikersnaam of e-mailadres</span></label>
        </div>
        <div class="form-group">
            <input type="password" name="wachtwoord" id="wachtwoord" class="form-control login-field"
                   placeholder="Wachtwoord" required title="Vul je wachtwoord in.">
            <label class="login-field-icon fui-lock" for="wachtwoord"><span class="labeltext">Wachtwoord</span></label>
        </div>
        <input type="submit" name="login" value="Inloggen" class="btn btn-primary btn-lg btn-block">

    </form>-->
</div>

</body>
</html>