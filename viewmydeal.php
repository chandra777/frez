<!DOCTYPE html>
<?php
session_start();
$_session['user']="uname"
?>
<body>
<ul>
<li><a href="viewmydeal.php">My deals</a></li>
<li><a href="deals.html">Deals</a></li>
<li><a href="farmer_home.html">Home</a></li>
</ul>
<style>
ul{
list-style-type:none;
margin:0;
padding:0;
background-color:#33ff33;
overflow:hidden;
}
li{
text-decoration:none;
float:left;
}
li a
{
display:block; 
padding:10px 20px 15px 20px;
text-align:center;
font-size:20px;
text-decoration:none;
color:black;
}
li a:hover
{
background-color:#000000;
color:white;
}
</style>
<br>
<img src="mydeals-1.png" style="height:300px width:400px">
<?php
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql="SELECT * from deals ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
	    echo "<br>";
		echo "My DEAL"."<br>"."<br>";
echo "productname : ".$row['product_name']."<br>"."<br>";
echo "qunatity :".$row['quantity']."".$row['units']."<br>"."<br>"."<hr>";
	}
}
else
{
	echo "No deals right now! ";
}
mysqli_close($conn);
?>
</html>