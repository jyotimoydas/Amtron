<?php include('server.php') ?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
.header2 {
    padding: 20px;
    text-align: center;
    background: #1abc9c;
    color: white;
}




.header2 h1 {
    font-size: 40px;
}



.footer{
    padding: 10px;
    text-align: left;
    background: #1abc9c;
    color: white;
}


</style>
</head>
<body>
  <div class="header2">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

<div class="footer">
  <h3 style="text-decoration:underline;"> Contact Us:</h3>
<p><br> Phone:+917002202614<br>
    Email:jyotimoydas6@gmail.com  </p>

</div>


</body>
</html>
