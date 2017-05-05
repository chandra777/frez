<!Doctype html>
<body>
<?php
$usern=$_POST['username'];
$pwd=$_POST['password'];
$username="root";
$password="gamparam";
$database="frez";
$servername="localhost";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
	echo "connection not established";
}
$sql = "SELECT * FROM login_details;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
	{
    while($row = mysqli_fetch_assoc($result)) 
	{
        echo "useranme: " . $row["uname"]."<br>";
    }
} 
else 
{
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>