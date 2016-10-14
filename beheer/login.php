<?php
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/jquery-1.11.0.min.js"></script>
    <style>
        input {
            margin-bottom: 20px;
        }

        h1 {
            margin: 25px 0 35px 0;
        }
    </style>

</head>
<body class="beheer" style="margin-top: 50px">
    <div class="container" style="max-width: 500px">
        <a href="/index.html">Keer terug naar de website</a>

        <h1>Beheer Alles in Twitterland</h1>

        <form class="form-signin">
            <label for="inputEmail" class="sr-only">E-mailadres</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mailadres" required autofocus>
            <label for="inputPassword" class="sr-only">Wachtwoord</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="inputSubmit">Inloggen</button>
        </form>

    </div> <!-- /container -->

</body>
</html>
