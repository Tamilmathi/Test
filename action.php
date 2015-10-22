<?php 
include 'connection.php';
$_SESSION['pin']=$_POST['pin'];
//echo "aaa";
if(isset($_POST['action']))
{

if($_POST['action'] == "Submit")

{

echo "success";
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
//$bal=$_SESSION['balance']
$pin=md5($pin);
echo "$num,$pin";
if(!empty($_SESSION['num']))
{
$result= mysqli_query($connection,"SELECT CardNo,PinNo FROM Transaction where CardNo ='$num' AND PinNo= '$pin' ");
//var_dump($result);
//print_r($result);
}
$count=mysqli_num_rows($result);
//echo "SELECT CardNo,PinNo FROM Transaction where CardNo ='$num' AND PinNo= '$pin' ";
if(!empty($count))
{
while($info=mysqli_fetch_array($result))
{
header('Location:option.php');
}
}
else
{
echo "Invalid PinNo";
require_once('pass.php');
}


}

elseif($_POST['action'] == "Register")
{

$_SESSION['num']=$_POST['num'];
$_SESSION['pin']=$_POST['pin'];
$_SESSION['balance']=$_POST['balance'];
$num=$_SESSION['num'];
$pin=$_SESSION['pin'];
$bal=$_SESSION['balance']
$pin=md5($pin);
$balance=$_POST['balance'];
$result= mysqli_query($connection,"SELECT CardNo,PinNo FROM Transaction where CardNo ='$num' AND PinNo = '$pin' " );
 
if(mysqli_num_rows($result)>0)
{
echo "<script>alert('The user already exists in the database')</script>";
require_once('register.php');
}
else
{
$result="INSERT INTO Transaction(CardNo,PinNo,Balance) VALUES ('$num','$pin','$balance')";
if (mysqli_query($connection, $result)) 
{
    header('Location:insert.php');
}

}

}


}
?>


