<!DOCTYPE html>
<body>
<<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$user=$_POST['username'];
$pswd=$_POST['psw'];
$address=$_POST['address'];

$phoneno=$_POST['phone_no'];
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql="INSERT INTO signip_frez(firstname,lastname,emailid,username,password,address,phone_no)VALUES('$fname','$lname','$email','$user','$pswd','$address','$phoneno')";

if (mysqli_query($conn, $sql)) 
{
	echo"new records created succesfully";
    header("Location:login.html");
}
else
{
	echo "error".mysqli_error($sql);
}
 mysqli_close($conn);

?>
</body>
</html>