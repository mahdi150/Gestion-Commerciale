<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajout Client</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="../css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="../vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="../css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="stylesheet" href="../css/prod.css">


</head>
<?php
  include('../connexionBD.php');
    // Include config file
    //require_once "../connexionBD.php";


function ajoute_client($i,$nc,$r,$a,$v,$p,$t){
    $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
    $sql="INSERT INTO client(numClient,nomClient,adress,ville,pays,tel) VALUES(0,'$r','$a','$v','$p',$t)" ;
    mysqli_query($link,$sql);
    echo"<script>alert('Client ".$_POST['nom'] ." a ete bien ajoutee !')</script>";
    header('location:../clients.php');
    //
}




if(isset($_POST['bajout'])){
        ajoute_client(0,$_POST['num'],$_POST['nom'],$_POST['adr'],$_POST['vil'],$_POST['pays'],$_POST['tel']);
        //die(' Client a ete bien ajoutee , vous pouvez vous <a href="../clients.php"> revenir</a>');
        
        //header('location:../clients.php');
}




?>

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
                                <a href="profile.php"class="nav-link"><i class="fas fa-user"style="margin-top:-20px"></i><?php echo( $_SESSION['user']['login']); ?></a>
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
                            <img src="../img/banner/banner-image.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                    <section class="login-block">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="md-float-material form-material" action="ajoutClient.php" method="POST">
                                        <div class="auth-box card">

                                                <!-- <div class="form-group form-primary"> <input type="text" class="form-control" name="num" value="" placeholder="Numero" id="nmr"required> </div> -->
                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="nom" value="" placeholder="Nom" id="raison"required> </div>
                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="adr" placeholder="Adress" value="" id="adrr"required> </div>
                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="vil" placeholder="Ville" value="" id="vile"required> </div>
                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="pays" placeholder="Pays" value="" id="pays"required> </div>
                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="tel" placeholder="Telephone" value="" id="tlf"required> </div>
                                                <div class="row">
                                                <button type="submit" name="bajout" class="btn btn-primary btn-md btn-block  text-center"><i class="fa fa-plus"></i> Ajouter </button>
                                                </div>
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
</body>
</html>

