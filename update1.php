<?php
include 'connection.php';
//echo "555";
$amt1=$_GET['deposit'];
echo $amt1;

$_SESSION['deposit']=$_GET['deposit'];
$amt=$_SESSION['deposit'];
echo $amt;
die();
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
$pin=md5($pin);
echo $num,$pin;
$result= mysqli_query($connection,"SELECT Balance FROM Transaction WHERE CardNo ='$num' AND PinNo= '$pin' ");
$count=mysqli_num_rows($result);

if(!empty($count))
{
while($info1=mysqli_fetch_array($result))
{
$value1=$info1['Balance'];

}
} 
//echo $value1;
$amt=$_SESSION['deposit'];

function deposit($value1,$amt)
{
$bal = $value1 + $amt;
return $bal;
}
$bal=deposit($value1,$amt);
$data="UPDATE Transaction SET Balance='$bal' WHERE CardNo ='$num' AND PinNo= '$pin' ";
if(mysqli_query($connection,$data))
{
echo "";
header('Location:insert.php');
}

?>
