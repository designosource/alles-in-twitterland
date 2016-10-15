<?php
include('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
include_once('classes/User.class.php');

if (!empty($_POST['gebruikeremail']) && !empty($_POST['wachtwoord'])) {
    $userLogin = new User();
    $userLogin->setMSEmail($_POST['gebruikeremail']);
    $userLogin->setMSWachtwoord($_POST['wachtwoord']);
    try {
        if ($userLogin->canLogin()) {
            $_SESSION['login']['loggedin'] = 1;
            include('inc/sessiecontrole.inc.php');
        }
    } catch (Exception $e) {
        $errorException = $e->getMessage();
        $feedback = buildFeedbackBox("danger", $errorException);
    }
} else if (isset($_POST['gebruikeremail']) && empty($_POST['gebruikeremail'])) {
    $feedback = buildFeedbackBox("danger", "Vul je e-mailadres in.");
} else if (isset($_POST['wachtwoord']) && empty($_POST['wachtwoord'])) {
    $feedback = buildFeedbackBox("danger", "Vul je wachtwoord in.");
}
?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <meta name="description" content="Login met je IMDstagram account.">
    <?php include_once('inc/header.inc.php'); ?>
</head>
<body class="beheer">
<div class="container">
    <a href="/index.php">Keer terug naar de website</a>
    <h1>Inloggen</h1>
    <form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
        //toon errorboodschap
        if (!empty($feedback)) {
            echo $feedback;
        }
        ?>
        <div class="form-group">
            <label class="login-field-icon fui-user" for="gebruikeremail"><span class="labeltext">E-mailadres</span></label>
            <input type="email" name="gebruikeremail" id="gebruikeremail" class="form-control login-field"
                   value="<?php echo isset($_POST['gebruikeremail']) ? htmlspecialchars($_POST['gebruikeremail']) : '' ?>"
                   placeholder="E-mailadres" required
                   title="Vul je e-mailadres in." autofocus>
        </div>
        <div class="form-group">
            <label class="login-field-icon fui-lock" for="wachtwoord"><span class="labeltext">Wachtwoord</span></label>
            <input type="password" name="wachtwoord" id="wachtwoord" class="form-control login-field"
                   placeholder="Wachtwoord" required title="Vul je wachtwoord in.">
        </div>
        <input type="submit" name="login" value="Inloggen" class="btn btn-primary btn-lg btn-block">
    </form>
</div>

</body>
</html>