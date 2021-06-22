<?php
 include '../action/food.php';



?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <?php
 include 'header.php';
?>
      </head>
        <body>
                <header style="margin-bottom:20px">
                  <nav>
                    <section class="content">
                         <div class="navbar">
                           <a href="../index.php"><img src="../image/lo.png" class="logo"></a>
                         </div>
                         <div class="links">
                             <a href="menu.php">Menu</a>
                             <a href="boissons.php">Boissons</a>
                             <a href="sauces.php">Sauces</a>
                             <a href="Commandes.php">Commandes</a>
                             <a href="ffmc.php">Fast-FOOD moins cher</a>
                           
                         </div>
                     </section>
                  </nav>
                </header>
                <section class="fastfood">

                <div class="container1">
                                   <a href="ajouterrestau.php" > <button class="btn sucsess" value="" >Ajouter restaurant </button> </a>
                                   <a href="ajouterrestau.php" > <button class="btn sucsess" value="" > Ajouter Menu </button> </a>
                                   <a href="ajouteringredient.php" > <button class="btn sucsess" value="" > Ajouter Ingredients </button> </a>
                                   <a href="listcommandes.php" > <button class="btn sucsess" value="" > Lister les commandes </button> </a>
                            </div>
                         <div class="container1">
                                 
                            </div>

              </section >

                   <footer class="footer">
                       <div class="footer-left">
                            <img src="image/bee.png" alt="">
                            <p><em>"Nous ne mangeons pas pour vivre mais parce que le met est savoureux et que l'appétit est là..."</em></p>
                            <br>
                            <div class="socials">
                              <a href="#"><img src="../image/fac.png" class="fac" ></a>
                              <a href="#"><img src="../image/goo.png" class="goo" ></a>
                              <a href="#"><img src="../image/inst.png" class="inst"></a>
                              <a href="#"><img src="../image/twi.png" class="twi" ></a>
                            </div>
                        </div>
                        <ul class="footer-right">
                          <li>
                            <h2>Address</h2>
                            <ul class="box">
                              <li><a href="#">Quatier</a></li>
                              <li><a href="#">Ville</a></li>
                              <li><a href="#">pays</a></li>
                            </ul>
                          </li>
                          <li>
                              <h2>A Propos</h2>
                              <ul>
                                <li><a href="#">Nom</a></li>
                                <li><a href="#">Numero personnel</a></li>
                                <li><a href="#">Adresse Email</a></li>
                              </ul>
                          </li>
                        </ul>
                        <div class="footer-botton">
                          <p>&copy;Developpeur 2021</p>
                        </div>
                   </footer>

                   <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
