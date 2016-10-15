<?php
//sessie starten
if(empty($_SESSION)){
    session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);
if (isset($_SESSION['login']['loggedin']) && $_SESSION['login']['loggedin'] == 1) {
    if ($current_page == 'login.php' || $current_page == 'register.php') {
        header('location: /beheer/index.php');

    }
} else if ($current_page != 'login.php' && $current_page != 'register.php') {
    header('location: /beheer/login.php');

}