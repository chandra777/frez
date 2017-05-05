<!Doctype html>
<body>
<?
$usern=$_POST['username'];
$pwd=$_POST['password'];
$username="localhost";
$password="gamparam";
$database="frez";
$servername="localhost";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	echo "connect not established";
}
$sql="INSERT INTO login_details(uname,pswd)VALUES('$usern','$pwd')";
if(mysqli_query($conn,$sql))
{
	echo "new records created succesfullly";
}
else
{
	echo"error in the query".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>