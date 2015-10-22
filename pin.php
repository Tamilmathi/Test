<?php
include 'connection.php';
$pass=$_POST['data'];
$pass=md5($pass);
$count=0;
//echo $data;
$result=mysqli_query($connection,"SELECT PinNo FROM Transaction Where PinNo ='$pass' ");
//print_r($result);
$info=mysqli_num_rows($result);
//echo $info;
if(!empty($info))
{
while($number=mysqli_fetch_array($result))
{
$num=$number['PinNo'];
//echo $num;
}
if($num)
{
 echo "valid";
}
}
else 
{
echo  "invalid PIN";
$count=$count+1;
/*echo $count;
if($count == 3)
{
echo "You are finished your number of attempts for  the day...please you will try on tomorrow";

}*/
}
?>
