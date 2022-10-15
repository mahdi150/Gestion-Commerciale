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
    <?php
    include('connexionBD.php');
    $_SESSION['id'] = 10 ;
    $sessionId = $_SESSION["id"];
    $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
    $sql="SELECT * FROM users WHERE id = $sessionId" ;
    $result=mysqli_query($link,$sql);
    $user = mysqli_fetch_assoc($result);
    ?>

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
            <div class="upload">
            <?php
                
                $name = $user["firstName"];
                $image = $user["image"];
            ?>
            <img src="img/<?php echo $image; ?>" width = 125 height = 125 title="<?php echo $image; ?>">
            <div class="round">
              
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
            <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
      </div>
    </form>
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nom</label><input type="text" class="form-control"  value="<?php echo( $_SESSION['user']['firstName']); ?>"></div>
                    <div class="col-md-6"><label class="labels">Prenom</label><input type="text" class="form-control" value="<?php echo( $_SESSION['user']['lastName']); ?>" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Login</label><input type="text" class="form-control"  value="<?php echo( $_SESSION['user']['login']); ?>"></div>
                    <!-- <div class="col-md-12"><label class="labels"></label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div> -->
                </div>
                <!-- <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div> -->
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Enregistrer</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit </span></div><br>
                <div class="col-md-12"><label class="labels">Bio</label><input type="text" class="form-control"  value=""></div> <br>
                <div class="col-md-12"><label class="labels">Nombre de fois de connexion</label><input type="text" class="form-control"  value=""></div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Supprimer votre compte</button></div>

            </div>
        </div>
    </div>
</div>
</div>
</div>