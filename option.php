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
  <form class="form-horizontal" role="form" id="move" name="Form"  action="action.php" method="post">
    <h2>SELECT TRANSACTION</h2>
     
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	
	<input type="text" class="form-control" onclick="location.href = 'deposit.php' " value="CASH DEPOSIT"></input>
       
      </div>
    </div>
	<div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	
<input type="text" class="form-control" onclick="location.href = 'withdrawal.php' " value="CASH WITHDRAWAL"></input>
        
      </div>
    </div>
	<div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	
        <input type="text" class="form-control" onclick="location.href = 'change.php' " value="CHANGE PIN"></input>
      </div>
    </div>
	<div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	
       <input type="text" class="form-control" onclick="location.href = 'balance.php' " value="BALANCE ENQUIRY"></input>
      </div>
    </div>
	<div>
  </form>
</div>
</div>
<!--<body>
<fieldset>
<legend>SELECT TRANSACTION</legend>
<a href="deposit.php"><div class="sign">CASH DEPOSIT</div></a><br><br>
<a href="withdrawal.php"><div class="sign">CASH WITHDRAWAL</div></a><br><br>
<a href="change.php"><div class="sign">CHANGE PIN</div></a><br><br>
<a href="balance.php"><div class="sign">BALANCE ENQUIRY</div></a>
</fielset>-->
</body> 
</html>
