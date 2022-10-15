<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>


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


<!--  custom css file  -->
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
<!--                         
                        <a href="signup.php"class="nav-link"><i class="fas fa-user"></i>Sign Up</a>
                        </li>
                        <li class="nav-item">
                        <a href="login.php"class="nav-link"><i class="fas fa-user"></i>Sign In</a>
                        </li> -->
                       
                        

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
        <!--<img src="./img/slider2.png" alt="About us" class="img-fluid" opacity="70%">-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/kids thinking.png" alt="About us" class="img-fluid"width="300px" style="margin-left: 120px;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title ">
                        <br>
                        <div class="row" style="margin-top: 100px;">
                        <a type="button" class="btn button primary-button text-uppercase col-3  nav-link" href="fonction/ajoutClient.php"> Ajouter</a></button>
                        <a type="button" class="btn button primary-button text-uppercase col-3 nav-link" href="fonction/rechercheClient.php"> Rechercher</a></button>
                        <!-- <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/supprimerClient.php"> Supprimer</a></button>
                        <a type="button" class="btn button primary-button text-uppercase  nav-link" href="fonction/modifieClient.php"> Modifier</a></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

        <div class="CSSTableGenerator" >
        
            <table >              
                <tr>
                    
                    <td >
                        Numero Client
                    </td>
                    <td>
                         Nom Client
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

                    </tr>
<?php
        $host = 'localhost';
        $dbname = 'commerciale';
        $username = 'root';
        $password = '';
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $query =$conn->prepare( "SELECT * FROM client ");
            $result=$query->query($query);
        } catch (Exception $Ex) {
            die('Erreur : ' . $Ex->getMessage());
        }
    if ($result) {
    /* Récupère un tableau associatif */
    while ($row = fetch_assoc($result)) {    
    ?>
    <tr>
    <td class="numc" >
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
    </tr>
    <?php }
    free_result($result);
}
?>      
<td></td>    
            </table>


        </div>
            

        
</body>
</html>

