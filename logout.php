<!doctype html>
<h1> logout here </h1>
<?php
session_start();
unset($_SESSION['$usern']);
session_destroy();
header("Location:login.html");
exit;
?>