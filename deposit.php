<?php 

include 'connection.php';

?>
<html>
<head>
<style>
#atm{
margin-top:150px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div id="atm">
<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email" >Enter Deposit Amount:</label>
      <div class="col-sm-10">
        <input type="text" name="deposit" class="form-control">
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default" onclick="window.location.href='update1.php' " >Submit</button>
	<input type="hidden" class="form-control" name="action" value="Deposit">
      </div>
    </div>
  </form>
</div>
</div>
<!--<body>
<form name="Form"  action="update1.php" method="post">
<div id="atm">

<p><b>Enter Deposit Amount:</b></p>
<input type="text" name=deposit class=inputid></input><br><br>
<input type="submit" value="Submit" class=inputid>
<label></label><input type="hidden" name="action" value="Deposit"><br><br>

</div>
</form>-->
</body>
</html>
