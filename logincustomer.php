<!DOCTYPE html>
<?php 
session_start();
echo"you have entered a wrong username or password";
?> 
<body>
<?php
$usern=$_POST['username'];
$pwd=$_POST['password'];
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	echo "Connection failed";
}
$sql="SELECT username,password FROM signip_frez;";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($usern==$row["username"]&&$pwd==$row["password"])
		{
			if(!isset($_SESSION['name']))
			{
				$_SESSION['name']="$usern";
				echo $_SESSION['name']."<br>";
				header("Location:farmer_home.html");
				
			}
				session_destroy();
		}
	}
}
	mysqli_close($conn);
?>
</body>
</html>