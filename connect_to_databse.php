<!Doctype html>
<?php
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
mysqli_connect($servername,$username,$password) or die(mysqli_error());
mysqli_select_db("frez");
?>
