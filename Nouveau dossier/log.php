//<?php
/*if(isset($_POST['Log'])&& $_POST['nom']=='mahdi' && $_POST['pwd']=='123'){
    session_start() ;
    $_SESSION['login'] = $_POST['nom'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header("location:home.php");
    
}*/

session_start() ;
include('connexionBD.php');

function is_valide($login , $pwd){
  $sql="SELECT * FROM `users` WHERE `login`='$login' and `passUser`='$pwd' " ;  
  $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
  $result=mysqli_query($link , $sql);
  // $_SESSION['user']=mysqli_fetch_assoc($result);
  $_SESSION['user']=null;


  //if(empty($result)){
    if(empty($result)){
    //session_destroy();
    echo"<script>alert('Login ou/et Password incorrecte')</script";
    header("location:login.php") ;
  }
  else{
    // 
    $_SESSION['user']=mysqli_fetch_assoc($result);
    //session_destroy();    
    header("location:home.php");
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