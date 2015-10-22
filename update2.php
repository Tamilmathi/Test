<?php
include 'connection.php';
$_SESSION['amount']=$_POST['amount'];
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
$pin=md5($pin);
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
$amt=$_SESSION['amount'];
if($amt > ($value1-500))
{
echo "Insufficiant Balance";
die();
header('Location:insert.php');
}
else 
{
$bal=withdrawal($value1,$amt);
}
function withdrawal($value1,$amt)
{
$bal = $value1 - $amt;
return $bal;
}

$data="UPDATE Transaction SET Balance='$bal' WHERE CardNo ='$num' AND PinNo= '$pin' ";
if(mysqli_query($connection,$data))
{
echo "success";
header('Location:insert.php');
}

?>
