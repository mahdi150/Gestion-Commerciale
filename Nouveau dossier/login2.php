<?php
/*if(isset($_POST['Log'])&& $_POST['nom']=='mahdi' && $_POST['pwd']=='123'){
    session_start() ;
    $_SESSION['login'] = $_POST['nom'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header("location:home.php");
    
}*/

session_start() ;

function is_valide($login , $pwd , $tab){
  foreach ($tab as $t){
    if(($t['login']==$login) and ($t['pwd']==$pwd)){
      return 1 ;
    }
  }
  return 0 ;
}

if(isset($_POST['cnx'])){
  $login=$_POST['login'] ;
  $pwd=$_POST['pwd'] ;
  if(is_valide($login , $pwd , $_SESSION['t'])){
    header("location:home.php");
  }
  else{
    //echo"<h4 class='login-register-text'>Login ou/et Password incorrecte</h4>";
    header("location:login.php") ;
  }
}
?>
<!--
<body>
<div class="titre">
  <fieldset>
    <h1> Bienvenu au Gestion Commercial</h1>
</div>
<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form method="POST" action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="nom" class="form-control" placeholder="Username or email" required>
      </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="pwd" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" name="Log" class="float">Login</button>
    </form>
  </div>
</div>
</fieldset>

 </body>
</html>-->
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
			</div>
      <p class="login-register-text">Pas de compte ?<a href="index.php">S'inscrire</a>.</p>
		</form>
	</div>
</body>

</html>
