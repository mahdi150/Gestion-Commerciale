<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recherche det_Cmd</title>


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
                    <div class="col-lg-6 col-md-12 about-title">
                    <section class="login-block">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form class="md-float-material form-material" action="#" method="POST">
                                        <div class="auth-box card">

                                                <div class="form-group form-primary"> <input type="text" class="form-control" name="num" value="" placeholder="Numero Commande" id="nmr"required> </div>
                                                
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
                        Numero Commande
                        </td>
                        <td>
                        Refference de Produit
                        </td>
                        <td>
                          Quantite Commande 
                        </td>
                        <td>
                          Supprimer 
                        </td>
                        <td>
                          Modifier
                        </td>
                        
                    </tr>


<?php
    $ref=$_POST['num'];
    $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
    $query = "SELECT * FROM detailcom where numCommande=$ref";
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
    <td>
        <form method="post" action="">
        <input type="hidden" name="supp" value="<?php echo($row["numCommande"]); ?>">
        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                        
        </form>
                       
    </td>
    <td>

    <form method="post" action="modifiedet_cmd.php">
        <input type="hidden" name="numCommande" value="<?php echo($row["numCommande"]); ?>">
        <input type="hidden" name="refProd" value="<?php echo($row["refProd"]); ?>">
        <input type="hidden" name="qteCmd" value="<?php echo($row["qteCmd"]); ?>">
        <button type="submit" class="btn"><i class="fa fa-edit"></i></button>
                           
    </form>
                            
    </td>
    </tr>
    <?php }
        mysqli_free_result($result);
}
}
?>

</table>
</div>
</form>
<?php

    function supprimer_detail_produit($ref){
        $link = mysqli_connect('localhost', 'root', '', 'gestioncommerciale');
        $sql="DELETE FROM `detailcom` WHERE numCommande=$ref";
        mysqli_query($link , $sql);
       // header('location:../produits.php');
    }


    if(isset($_POST['supp'])){
        $ref=$_POST['supp'];
        supprimer_detail_produit($ref);
        die('La Detail Commande a ete bien supprimee , vous pouvez vous <a href="../det_cmd.php"> revenir</a>');
    }


?>