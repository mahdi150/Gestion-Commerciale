<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>


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
    <link rel="stylesheet" href="./css/stylee.css">
    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

    <!--  custom css file  -->
<link rel="stylesheet" href="./css/prod.css">


   

</head>

<body>
<div class="container">


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
    
   
       
   <!-- <main class="site-main">


      <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/banner/banner-image.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Let me</span>
                            <span>introduce</span>
                            <span>my Project</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                C'est un systeme de la gestion commerciale telque la gestion de :<br>
                                Clients<br>
                                Produits<br>
                                Commandes<br>
                                Details de Commandes
                            
                            </p>
                        </div>
                        <a type="button" class="btn button primary-button text-uppercase" class="nav-link"href="prod.php">Products</a>
                    </div>
                </div>
            </div>
        </section> -->

<!-- <h1 class="">System Management</h1> -->
 <!-- <div class="container-fluid px-1 py-5 mx-auto row justify-content-center">
    <div class="col-lg-9 col-sm-11 ">
        <div class="card pl-4 pl-md-5 pr-3">
            <div class="row">
                <div class="left-side col-md-5">
                        <h2 class="text-uppercase pt-5">
                            <span>Let's'</span>
                            <span>Make</span>
                            <span>The change</span>
                        </h2>
                    <a class="btn btn-pink mb-5 "href="clients.php">Edit Now</a>
                </div>
                <div class="right-side col-md-7 row justify-content-center">
                    <div class="d-flex">
                        <img class="boy-img fit-image" src="./img/kids thinking.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<img class="boy" src="./img/bg3.png">
<a class="btn btn-pink mb-5 bt"href="clients.php"style="margin-top:-180px">Edit Now</a>
</div>
</body>
</html>