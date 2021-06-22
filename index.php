<?php
 include 'action/food.php';


  $host = "localhost";
  $base = "fastfood";
  $user = "root";
  $mdp = "";

  $con = new PDO('mysql:host=localhost;dbname='.$base.';charset=UTF8', $user, $mdp);
  $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  

   $requete = "select * from `restaurants` ";
      echo $requete ;

   $result =  $con->query($requete) ;

  $result = $result->fetchALL(PDO::FETCH_ASSOC);
  

?>
<!DOCTYPE html>
<html lang="">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title> Fast FOOD en ligne</title>
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   

      </head>
     <body>
       <header>
          <nav>
            <section class="content">
                 <div class="navbar"><a href="index.php"><img src="image/lo.png" class="logo"></a>

                 </div>
                 <div class="links mt-10 ppb-50">
                     <a href="pages/menu.php">Menu</a>
                     <a href="pages/boissons.php">Boissons</a>
                     <a href="pages/sauces.php">Sauces</a>
                     <a href="pages/Commandes.php">Commandes</a>
                     <a href="pages/ffmc.php">Fast-FOOD moins cher</a>
                     <a href="pages/admin.php">Administrer</a>
                   </div>
             </section>
          </nav>
          <div class="container">
            <section class="content-header">
              <section class="text-header" style="float:right;justify-content: space-between;">
                <h1>Meilleurs Fast-Food</h1>
                <p>"SOUTENEZ <br> NOS FAST FOOD ET <br> COMMANDEZ A EMPORTER"</p>
                <a href="pages/menu.php">Fast FOOD</a>
              </section>
              <img src="image/top.jpg" alt="">
            </section>
          </div>
       </header>
       <section class="fastfood">
          <div class="container1">
            <h2 class="ff">Nos Fast FOOD</h2>
            <div class="container-ff">
              <?php
                    foreach($result as $row ) {
                        echo "<div class='article'>" ;
                       echo "  <img src='image/".$row['photo']."' alt=''>" ;
                        echo $row['nom'] ;
                        echo "</div>" ;
                   //     echo " <img src='image/".$row['photo']."' alt=''>" ;

                    }
              ?>
              <div class="article">
                <img src="image/bk.png" alt="">
                <a href="#">consulter Nos  Produits--></a> 
              </div>
              <div class="article">
                <img src="image/kfc.png" alt="">
                <a href="#">consulter Nos  Produits--></a>
              </div>
              <div class="article">
                <img src="image/mc.png" alt="">
                <a href="#">consulter Nos  Produits--></a>
              </div>
              <div class="article">
                <img src="image/Quic.png" alt="">
                <a href="#">consulter Nos  Produits--></a>
              </div>
              <div class="article">
                <img src="image/pi.png" alt="">
                <a href="#">consulter Nos  Produits--></a>
              </div>
              <div class="article">
                <img src="image/5sub.png" alt="">
                <a href="#">consulter Nos  Produits--></a>
              </div>
            </div>
          </div>
       </section>
      <footer class="footer">
               <div class="footer-left">
                    <img src="image/bee.png" alt="">
                    <p><em>"Nous ne mangeons pas pour vivre mais parce que le met est savoureux et que l'appétit est là..."</em></p>
                    <br>
                    <div class="socials">
                      <a href="https://www.facebook.com/florencebrunelle.eyou"><img src="image/fac.png" class="fac" ></a>
                      <a href=""><img src="image/goo.png" class="goo" ></a>
                      <a href="https://www.instagram.com/florencebrunelleeyou?r=nametag"><img src="image/inst.png" class="inst"></a>
                      <a href=""><img src="image/twi.png" class="twi" ></a>
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
