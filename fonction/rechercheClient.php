<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche Client</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="../css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="../vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../csss/client.css">
    
    <!--  Responsive css file  -->
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/prod.css">


</head>


<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="../img/mahdi-logo.png "width="40" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../clients.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../produits.php">  Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../commands.php">Commands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../det_cmd.php">Details Commande</a>
                        </li>
                        <li class="nav-item" >
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                <li><?php session_start() ;  if( $_SESSION){ ?>
                                <a class="nav-link"><i class="fas fa-user"style="margin-top:-20px"></i><?php echo( $_SESSION['user']['login']); ?></a>
                                <ul style="margin-left:30px">
                                            <li><a href="../profile.php">Profile</a></li>
                                            <li><a href="../deconnexion.php">Logout</a></li>
                                </ul>
                                <?php } ?>
                                </li>
                            </div>
                        </div>
                                
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                        <img src="../img/14.png" alt="About us" class="img-fluid"width="400px" style="margin-left: 60px; margin-top: 80px; ">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title" style="margin-top:80px">
                    <section class="login-block">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="md-float-material form-material" action="" method="POST">
                                        <div class="auth-box card">

                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="num" value="" placeholder="Numero" id="nmr"required> </div>
                                                
                                        </div>
                                        <div >
                                            <button type="submit" name="recherche" class="btn btn-primary btn-md btn-block  text-center"><i class="fa-solid fa-square-plus"></i></i> Rechercher </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        
                    </section>                  
                    </div>
                </div>
            </div>
        </section>

        <?php
                         include('../connexionBD.php');
                         
                               if(isset($_POST['recherche'])){


                                ?>
                                    <div class="CSSTableGenerator" >
                                  <table >              
                                     <tr>
                    
                            <td >
                        Numero Client
                        </td>
                        <td>
                         Nom
                        </td>
                        <td>
                          Adresse
                        </td>
                        <td>
                          Ville
                        </td>
                        <td>
                          Pays
                        </td>
                        <td>
                          Telephone
                        </td>
                        <td name="modifie">
                            Supprimer
                        </td>
                        <td>
                            Modifier
                        </td>
                    </tr>


 <?php
    $ref=$_POST['num'];
                               
    $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
    $sql="DELETE FROM `client` WHERE numClient=$ref" ;
    $sql2="DELETE FROM commande where numClient=$ref" ;                         
    $query = "SELECT * FROM client where numClient=$ref";
                     if ($result = mysqli_query($link,$query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysqli_fetch_assoc($result)) {    
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["numClient"];?>
                       </td>

                       <td>
                         <?php echo $row["nomClient"];?>
                       </td>

                       <td>
                         <?php echo $row["Adress"];?>
                       </td>

                       <td>
                         <?php echo $row["ville"];?>
                       </td>

                       <td>
                         <?php echo $row["pays"];?>
                       </td>

                       <td>
                         <?php echo $row["tel"];?>
                       </td>
                       <td>
                           <form method="post" action="">
                               <input type="hidden" name="supp" value="<?php echo($row["numClient"]); ?>">
                               <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                           
                       </form>
                       
                        </td>
                        <td>

                        <form method="post" action="modifieClient.php">
                               <input type="hidden" name="numClient" value="<?php echo($row["numClient"]); ?>">
                               <input type="hidden" name="nomClient" value="<?php echo($row["nomClient"]); ?>">
                               <input type="hidden" name="Adress" value="<?php echo($row["Adress"]); ?>">
                               <input type="hidden" name="ville" value="<?php echo($row["ville"]); ?>">
                               <input type="hidden" name="pays" value="<?php echo($row["pays"]); ?>">
                               <input type="hidden" name="tel" value="<?php echo($row["tel"]); ?>">
                               <button type="submit" class="btn"><i class="fa fa-edit"></i></button>
                           
                       </form>
                            
                        </td>
                        </tr>
                        <?php }
     mysqli_free_result($result);
    // mysql_close ();
}
}
?>

                    




                </table>


            </div><?php

function suprimer_client($ref){echo($ref);
    $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
    $sql="DELETE FROM `client` WHERE numClient=$ref" ;
    $sql2="DELETE FROM commande where numClient=$ref" ;
    
    if(!empty($sql)){
        $res=mysqli_query($link , $sql) ;
        // echo($res);
        mysqli_query($link , $sql2) ;
      //  echo"<script>alert(".$res.")</script>";
      echo"<script>alert('Client a ete bien Supprimer avec leurs commandes !')</script>";
    }
    else{
        header('location:../clients.php');
    }
    

    //
    //
}

if(isset($_POST['supp'])){ 
    // echo"<script>alert(".$_POST['supp'].")</script>";
    // echo($_POST['supp']);
    $ref=$_POST['supp'] ;
   suprimer_client($ref) ;
}
?>



