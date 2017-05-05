<!DOCTYPE html>
<body>
<?php
$contact=$_POST['email'];
$user=$_POST['user'];
$p_name=$_POST['productname'];
$quantity_to_sold=$_POST['quantity'];
$units=$_POST['units'];
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql="INSERT INTO deals(product_name,quantity,units,uname,contact)VALUES('$p_name','$quantity_to_sold','$units','$user','$contact')";
if (mysqli_query($conn, $sql)) 
{
    header("Location:viewmydeal.php");
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</body>
</html>