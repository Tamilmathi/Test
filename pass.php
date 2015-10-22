<?php 
session_start();
$_SESSION['num']=$_POST['num'];

?>
<html>
<head>
<style>
.inputid{
width:330px;
height:40px;

}
#atm{
margin-top:150px;

}

</style>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script>
$(document).ready(function(){
$("#click").click(function(){
  	var data=$("#pin").val();
$.ajax({
type:"post",
url:"pin.php",
data :{data:data},
success:function(msg){
var info=msg;
$("#result").html(info);
if(info == "valid"){
$("#move").submit();
}
else{
alert(info);
}
}
});
});
});
</script>
</head>
<body>
<body>
<div id="atm">
<div class="container">
  <form class="form-horizontal" role="form" id="move" name="Form"  action="action.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter PIN number:</label>
      <div class="col-sm-10">
        <input type="password" name="pin" class="form-control" id="pin" placeholder="Enter pin number"><span id="result"></span>
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default"  id="click">Submit</button>
	<input type="hidden" class="form-control" name="action" value="Submit">
      </div>
    </div>
  </form>
</div>
</div>
<!--<form id="move" name="Form"  action="action.php" method="post">
<div id="atm">

<p><b>Enter PIN Number:</b></p>
<input type="password" name=pin class=inputid id="pin"></input><span id="result"></span><br><br>
<input type="button" value="Submit" class=inputid id="click">
<label></label><input type="hidden" name="action" value="Submit"><br><br>

</div>
</form>-->
</body>
</html>

