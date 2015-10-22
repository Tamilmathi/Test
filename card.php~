<?php
include 'connection.php';
$data=$_POST['data'];
//echo $data;
$result=mysqli_query($connection,"SELECT CardNo FROM Transaction Where CardNo ='$data' ");
//print_r($result);
while($number=mysqli_fetch_array($result))
{
$num=$number['CardNo'];
}
if($num)
{
// echo json_encode($num);
echo "valid";

}
else 
{
//echo  json_encode($num);

echo "Card number not valid";
}
?>
