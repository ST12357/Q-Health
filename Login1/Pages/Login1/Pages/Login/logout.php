<?php
$cookie_name = 'user';
unset($_COOKIE[$cookie_name]);
$res = setcookie($cookie_name, '', time() - 300);

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:Pages/login.php"); // Redirecting To Home Page
}
?>