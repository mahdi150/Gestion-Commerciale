<?php
session_start() ;
include('connexionBD.php');
function add_user($id,$fn,$ln,$l,$pu){
	$link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
	$sql ="INSERT INTO `users`(`ID`, `firstName`, `lastName`, `login`, `passUser`) VALUES (0,'$fn','$ln','$l','$pu')";
	$sql2="SELECT * FROM `users` WHERE `login`='$l' and `passUser`='$pu' " ;  

	mysqli_query($link , $sql);
	$res=mysqli_query($link , $sql2) ;
	$_SESSION['user']=mysqli_fetch_assoc($res);

	header("location:home.php") ;
	

}
	if(isset($_POST['inscription'])){

		add_user(0,$_POST['prenom'],$_POST['nom'] ,$_POST['login'],$_POST['pwd']) ;

	}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/registre.css">
	<title>Register</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Prenom" name="prenom" value="" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nom" name="nom" value="" required>
			</div>
			<div class="input-group">
				<input type="login" placeholder="login" name="login" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pwd" value="" required>
			</div>
			<!-- <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpwd" value="" required>
			</div> -->
			<div class="input-group">
				<button name="inscription" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>

</html>