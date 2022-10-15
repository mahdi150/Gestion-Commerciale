<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Commande</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./csss/client.css">
    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

    <link rel="stylesheet" href="./css/prod.css">


</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/mahdi-logo.png "width="40" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clients.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produits.php">  Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="commands.php">Commands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="det_cmd.php">Details Commande</a>
                        </li>
                        <li class="nav-item" >
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                <li><?php session_start() ;  if( $_SESSION){ ?>
                                <a href="profile.php"class="nav-link"><i class="fas fa-user"style="margin-top:-20px"></i><?php echo( $_SESSION['user']['login']); ?></a>
                                <ul style="margin-left:30px">
                                            <li><a href="profile.php">Profile</a></li>
                                            <li><a href="deconnexion.php">Logout</a></li>
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
                        <img src="./img/kids thinking.png" alt="About us" class="img-fluid"width="300px" style="margin-left: 120px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <!-- <h2 class="text-uppercase pt-5">
                            <span>les</span>
                            <span>Operations</span>
                            <span>sur Details Commande</span>
                        </h2> -->
                        <div class="row"style="margin-top: 100px;">
                        <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/ajoutdet_cmd.php"> Ajouter</a></button>
                        <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/recherchedet_cmd.php"> Rechercher</a></button>
                        <!-- <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/supprimerdet_cmd.php"> Supprimer</a></button>
                        <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/modifiedet_cmd.php"> Modifier</a></button>
                        -->
                    </div>
                        </div>
                </div>
            </div>
        </section>

        <div class="CSSTableGenerator" >
                <table >              
                    <tr>
                    
                        <td >
                        Numero Commande
                        </td>
                        <td>
                         Refference Produit
                        </td>
                        <td>
                          Quantite Commandé
                        </td>
                       
                    </tr>


                      

                      <?php
                         include('connexionBD.php');
                         $query = "SELECT * FROM detailcom ";
                     if ($result = mysqli_query($link, $query)) {
                           /* Récupère un tableau associatif */
                    while ($row = mysqli_fetch_assoc($result)) {    
                      ?>
                        <tr>
                          <td>
                         <?php echo $row["numCommande"];?>
                       </td>

                       <td>
                         <?php echo $row["refProd"];?>
                       </td>

                       <td>
                         <?php echo $row["qteCmd"];?>
                       </td>

                        </tr>
                        <?php }
    mysqli_free_result($result);

}
?>

                </table>


            </div>
            <br>
       
