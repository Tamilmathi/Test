<?php
include 'connection.php';


?>
<html>
<style>
#atm{
margin-top:150px;
}
</style>
<form name="form" action="update.php" method="post">
<body>
<div id="atm">
<div class="container">
  <form class="form-horizontal" role="form" id="move" name="Form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter  Old PIN:</label>
      <div class="col-sm-10">
        <input type="password" name="pin" class="form-control" id="pin" placeholder="Enter pin number"><span id="result"></span>
      </div>
    </div>
<div class="container">
  <form class="form-horizontal" role="form" id="move" name="Form"  action="action.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter  New PIN:</label>
      <div class="col-sm-10">
        <input type="password" name="pin1" class="form-control" id="pin" placeholder="Enter pin number"><span id="result"></span>
      </div>
    </div>
<div class="container">
  <form class="form-horizontal" role="form" id="move" name="Form"  action="action.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Enter  Confirm PIN:</label>
      <div class="col-sm-10">
        <input type="password" name="pin1" class="form-control" id="pin" placeholder="Enter pin number"><span id="result"></span>
      </div>
    </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-default"  id="click" onclick="window.location.href='update.php'">Submit</button>
	<input type="hidden" class="form-control" name="action" value="Submit">
      </div>
    </div>
  </form>
</div>
</div>
<!--<label>Enter Old PIN:</label><input type="password" name="pin" class="inputid"></input><br><br>
<label>Enter New PIN:</label><input type="password" name="pin1" class="inputid"></input><br><br>
<label>Confirm PIN:</label><input type="password" name="pin1" class="inputid"></input><br><br>
<input type="submit" value="Submit" class=inputid>
</div>-->
</form>
</html>
