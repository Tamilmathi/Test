<?php 

include 'connection.php';

?>
<html>
<head>
<script>

</script>
</head>
<style>
.button{
width:330px;
height:40px;
}
#atm{
margin-top:150px;
margin-bottom:150px;
margin-right:auto;
margin-left:auto;
border:3px solid #a1a1a1;
padding:9px 15px; 
background:white;
width:400px;
border-radius:20px;
box-shadow: 7px 7px 6px;
text-align:left;
padding:9px 35px; 
width:400px;
font-size:150%;
font-family:Times New Roman;
}
body{
background-color:lavender;
}
</style>
<body>
<div id="atm">
<h ><b>Thank you for using atm!!!!!</b></h>
<p>Do you want to continue Transaction(y/n):</p>
<input type="button" id="yes" value="YES"  onclick="location.href = 'option.php' "></button>
<input type="button" id="no" value="NO"  onclick="location.href = 'index.php' "></button><br><br>
<input type="button" id="logout" value="LOGOUT"  class="button" onclick="location.href = 'logout.php' "></button>
</body>
</div>
</html>
