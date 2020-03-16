<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body style="background-color: #F7DCC8">


 

	<br/>
	<br/>
	<br/>
    <div class="container" align="center">
	<div class="card" style="width: 20rem; background-color: #8ce0c9; border:none">
	<br/>
		<form action="function/login.php" method="post">
        <br><h3>LOGIN</h3><br><br>
			<div class="card body" style="background-color: #8ce0c9; border:none">
				<label>Email:</label>
				<input type="text" name="email" id="email" required style="background-color:#8ce0c9; border:none; border-bottom: 3px solid white; padding: 12px 20px; margin:10px;"/>
            <br>
				<label>Password:</label>
				<input type="password" name="password" id="password" required style="background-color:#8ce0c9; border:none; border-bottom: 3px solid white; padding: 12px 20px;margin:10px;"/>
            </div>
            <br>
			
			<div>
				<input type="submit" value="Login" class="btn">
        <br> <br>
        Don't have an account? <a href="register.php" value="Register">Register</a>
        <br><br>
			</div>
		</form>
	</div>
    </div>


</body>

</html>