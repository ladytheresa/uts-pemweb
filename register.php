
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
		<form action="function/regisfunction.php" method="post" onSubmit="return validasi()">
        <br><h3>REGISTER</h3><br><br>
			<div class="card body" style="background-color: #8ce0c9; border:none">
				<label>Email:</label>
				<input type="text" name="email" id="email" required style="background-color:#8ce0c9; border:none; border-bottom: 3px solid white; padding: 12px 20px; margin:10px;"/>
            <br>
                <label>Role:</label>

                <select id="role" name="role">
                    <option value="1">Admin</option>
                    <option value="3">Kasir</option>
                    <option value="2">Manager</option>
                </select> 
			<br>
				<label>Password:</label>
				<input type="password" name="password" id="password" required style="background-color:#8ce0c9; border:none; border-bottom: 3px solid white; padding: 12px 20px;margin:10px;"/>
            <br>
				<label>Confirm Password:</label>
				<input type="password" name="cpassword" id="cpassword" required style="background-color:#8ce0c9; border:none; border-bottom: 3px solid white; padding: 12px 20px;margin:10px;"/>
			</div>
            <br>
			
			<div>
            <input type="submit" value="Register" class="btn" />
            <br><br>
				Already have an account? <a href="index.php">Login</a>
                <br><br>
			</div>
		</form>
	</div>
    </div>


<script type="text/javascript">


function validasi() {
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var email = document.getElementById("email").value;		   

    <?php 
        include 'config.php';

    $query = "SELECT * from employee where email_employee='email'";
    $result=$db->query($query);

    ?>
  
    if (password != cpassword) {
        alert("Invalid password!");
        return false;
    }else if(){
        if($result == 1){ 
            alert("Email already exists");
        return false;}
    }else{
        return true;
    }
}

</script>
</body>

</html>