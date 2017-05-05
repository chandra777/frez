<!DOCTYPE html>
<?php
$myfile=fopen("manu.txt","r")or die("the file is not availabale");
echo fread($myfile,filesize("manu.txt"));
fclose($myfile);
?>
</html>
