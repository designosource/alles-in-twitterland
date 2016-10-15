<?php
include_once('inc/sessiecontrole.inc.php');
include_once('inc/feedbackbox.inc.php');
//autoload classes
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.class.php';
});
//hulpvariabele om in html input niet opnieuw te tonen bij voltooide registratie
$madeAccount = false;
if (isset($_POST['registreer']) && !empty($_POST['registreer'])) {
    //invoervariabelen
    $email = $_POST['email'];
    $password = $_POST['wachtwoord'];
    //invoer valideren via Validation classe en resultaat toevoegen aan array errors
    $validation = new Validation();
    $errors["emailadres"] = $validation->isValidEmail($email);
    $errors["wachtwoord"] = $validation->isValidPassword($password);
    //verwijdert juist ingevulde elemeneten (NULL) uit array
    $errors = array_filter($errors);
    //probeer account te registreren als er geen errors in array $errors zitten
    if (count($errors) == 0) {
        //wachtwoord hashen. Hier plaatsen, anders telkens hashen als invoer niet correct is.
        $hashOpties = ['cost' => 12];
        $passwordHash = password_hash($password, PASSWORD_DEFAULT, $hashOpties);
        try {
            $user = new User();
            $user->setMSEmail($email);
            $user->setMSWachtwoord($passwordHash);
            $user->Register();
            $madeAccount = true;
            $feedback = buildFeedbackBox("success", "Je account is aangemaakt. <a href=\"login.php\">Log hier in</a>.");
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            $feedback = buildFeedbackBox("danger", $errorMessage);
        }
    } else {
        //niet alle velden zijn juist ingevuld
        $feedbacktext = "controleer volgende velden:";
        //li met fouten ophalen
        foreach ($errors as $error) {
            $feedbacktext .= "<div>- $error</div>";
        }
        $feedback = buildFeedbackBox("danger", $feedbacktext);
    }
}?><!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Registreren</title>
    <?php include_once('inc/header.inc.php') ?>
</head>
<body class="beheer">
<div class="container">
    <a href="/index.php">Keer terug naar de website</a>
    <h1>Registreren</h1>
    <form class="login-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

        <?php if (!empty($feedback)) {
            echo $feedback;
        } ?>

        <!-- veld email -->
        <div class="form-group">
            <label class="login-field-icon fui-mail" for="email"><span class="labeltext">E-mailadres</span></label>
            <input type="email" name="email" class="form-control"
                   value="<?php if (!empty($feedback) && $madeAccount === false) {
                       echo htmlspecialchars($email);
                   } ?>" placeholder="E-mailadres" id="email" required autofocus
                   title="Vul je Thomas More e-mailadres in.">
        </div>

        <!-- veld wachtwoord -->
        <div class="form-group">
            <label class="login-field-icon fui-lock" for="wachtwoord"><span
                    class="labeltext">Wachwoord</span></label>
            <input type="password" name="wachtwoord" id="wachtwoord" class="form-control"
                   placeholder="Wachtwoord" required title="Kies een wachtwoord van minimaal 6 tekens.">

        </div>

        <!-- formulier verzenden -->
        <input type="submit" name="registreer" value="Registreren" class="btn btn-primary btn-lg btn-block">

    </form>
</div>

</body>
</html>