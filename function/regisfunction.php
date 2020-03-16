<?php 
include 'config.php';

$email = $_POST["email"];
$role = $_POST["role"];
$password = md5($_POST["password"]);
$cpassword = md5($_POST["cpassword"]);


//echo $email;
//echo '<br>'.$role;
//echo '<br>'.$password;
//echo '<br>'.$cpassword.'<br>';

$cekquery = mysqli_query($db, "SELECT * FROM employee where email_employee = '$email'");
$result = mysqli_num_rows($cekquery);

//echo '<br>'.$result;

if($result == 1)
    {
         echo 'email already exists';
         header("location: ../register.php");

    }
    else{
          mysqli_query($db, "INSERT INTO employee VALUES('$email','$role', '$password')");
            header("location: login.php");
          
    }
  

?>


