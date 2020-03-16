<?php 
include 'config.php';

$email = $_POST["email"];
$password = md5($_POST["password"]);


$login = mysqli_query($db, "SELECT * FROM employee WHERE email_employee='$email' and password='$password'");
$cek = mysqli_num_rows($login);
echo $cek;

if($cek > 0){
	session_start();
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	echo "berhasil!";
	header("location: ../movie.php");
	
}else{
	echo "gagal!";
	header("location: ../index.php");	
}

?>
   
