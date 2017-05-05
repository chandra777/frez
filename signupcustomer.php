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
$yearsofexp=$_POST['yop'];
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql="INSERT INTO signip_frez(firstname,lastname,emailid,username,password,address,phone_no,years_of_experience)VALUES('$fname','$lname','$email','$user','$pswd','$address','$phoneno','$yearsofexp')";
if (mysqli_query($conn, $sql)) 
{
	echo "new records created succesfully";
    header("Location:login.html");
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</body>
</html>