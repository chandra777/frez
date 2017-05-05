<!DOCTYPE html>
<?php
session_start();
?>
<body>
<ul>
<li><a href="alldeals.php">Order</a></li>
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

h1
{
background-color:#33ff33;
color:black;
padding-left:4px;
text-align:center;
font-size:40px;
}
<img src="money.jpg" style="height:180px ;width:240px"></img>
</style>
<br><br><br>
<?php
$servername="localhost";
$username="root";
$password="gamparam";
$database_name="frez";
$conn=mysqli_connect($servername,$username,$password,$database_name);
$sql="SELECT  * from deals;";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
{
echo "Productname : ".$row['product_name']."<br>"."<br>";
echo "Quantity :".$row['quantity']."".$row['units']."<br>"."<br>";
echo "Contact  Mr.".$row['uname']." "."at ".$row['contact']."<hr>";
	}
}
else{
	echo "There are no items to order please check after some time  ".mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>