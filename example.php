<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() 
	{
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
echo strlen("helloworld");
echo strrev("hello world");
echo str_word_count("hello world hi i am a good boy");
echo strpos("gampa manobhiram","manobhiram");
echo str_replace("world","manu","hello manu");
define("greeting","hello");
echo greeting;
define("sala",42);
echo sala;
$carrer_option="mba";
switch ($carrer_option)
{
	case "mba";
		echo "you choose mba";
		break;
		case "doctor";
		echo "you choose mbbbs";
		break;
		default:
		echo "you chosse none of this ";
}
$city="bombay";
switch ($city)
{
case "bombay";
echo "your in bombay";
break;
default:echo"your vanished";
}
$i=33;
switch($i)
{
	case 2;
		echo "the number is 2";
		break;
	case 33;
		echo "the  number you choose is a lucky nummber";
		break;
		default:echo "you have not choosen any number";
}
$x=2;
while($x<5)
{
echo "the number is :".$x;
$x++;
}
$x=strlen("bahal bhla a rang bale ");
while($x<30)
{
	echo "the length of the string is :".$x;
	$x++;
}
echo "<br>";
for($y=22;$y<100;$y++)
{
	echo "the number is :$y <br>";
}
function marriage($age)
{
	if($age>=30)
	{
		echo "your are eligible for the marriage ";
	}
    else
	{
		echo "you are not eligible ";
	}
}
	marriage(43);
function familyname($name)
{
	echo "$fname marshall";
}
familyname("craig");
function caluculate($x=23,$y=43)
{
	$z=$x+$y;
	echo $z;
}
$vegetables=array("oranges","mangos");
echo "i love".$vegetables[0].","."and also".$vegetables[1];
$count=count($vegetables);
echo $count;
echo "today date is ".date("y/m/d");
echo "todat time is ".date("h:i:s");
$d=mktime(11,12,34,10,12,2017);
echo "date and time are ".date("y-m-d h:i:s",$d)

?>

</body>
</html>