<?php
// Initialize the session.
session_start();
// Finally, destroy the session.
session_destroy();
//redirect to login page
header('location: /alles-in-twitterland/beheer/login.php');