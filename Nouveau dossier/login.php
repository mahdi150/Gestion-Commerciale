<?php 

session_start() ;
include('connexionBD.php');

function is_valide($login , $pwd){
  $sql="SELECT * FROM `users` WHERE `login`='$login' and `passUser`='$pwd' " ;  
  $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
  $result=mysqli_query($link , $sql);
  // $_SESSION['user']=mysqli_fetch_assoc($result);
  $_SESSION['user']=null;


  //if(empty($result)){
    if(mysqli_num_rows($result)==1){
      $_SESSION['user']=mysqli_fetch_assoc($result);
      header("location:home.php");
   
  }
  else{
    echo"<script>alert('Login ou/et Password incorrecte')</script";
    header("location:login.php") ;  
    //echo("<script>alert('Login ou/et Password incorrecte')</script>");


  }


//        <?php if( $_SESSION)  echo( $_SESSION['user']['login']); 

}

if(isset($_POST['cnx'])){
  $login=$_POST['login'] ;
  $pwd=$_POST['pwd'] ;
  is_valide($login , $pwd ) ;
  
  //echo"<h4 class='login-register-text'>Login ou/et Password incorrecte</h4>";
   
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
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Se connecter</p>
			<div class="input-group">
				<input type="text" placeholder="Email" name="login" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pwd" value="" required>
			</div>
			<div class="input-group">
				<button name="cnx" class="btn">Se connecter</button>
        <!-- <?php// if( $_SESSION)  echo( $_SESSION['user']['login']); ?> -->
			</div>
      <p class="login-register-text">Pas de compte ?<a href="signup.php">S'inscrire</a>.</p>
		</form>
	</div>
</body>

</html>
