<?php
 include '../action/food.php';

 if(isset($_REQUEST['connect'])){
  $host = "localhost";
  $base = "fastfood";
  $user = "root";
  $mdp = "";

  $con = new PDO('mysql:host=localhost;dbname='.$base.';charset=UTF8', $user, $mdp);
  $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $nom = $_REQUEST['nom'] ;
  $adresse = $_REQUEST['adresse'] ;
  $etoile = $_REQUEST['nb'] ;
  $photo =  $_REQUEST['photo'] ;
  

  $requete = "INSERT INTO `restaurants` (`id`, `nom`, `adresse`, `nbre_etoile`, `photo`) VALUES (NULL, '$nom', '$adresse', '$etoile', '$photo') ";
      echo $requete ;
   $result =  $con->query($requete) ;

   if($result) {
     echo " <script > alert('restaurant ajouté' ) ;</script>" ;
     echo " restaurant ajouté" ;
   
    
     header('location:./gestion.php' ) ;
   } else {
     echo " erreur d'authentification " ;
   }

}

?>
<!DOCTYPE html>
  <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../style.css">
      </head>
        <body>
                <header>
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
                <section>
                  <form class="" action="#" method="post">
                    <div class="">
                      Nom:<input type="text" name="nom" >
                    </div>
                    <div class="">
                      Prenom:<input type="text" name="Prenom" >
                    </div>
                    <div class="">
                     Restaurant:<select  value="restaurant" name="er
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     ">
                        <option >  KFC </option > 
                        <option >  BURGER KING </option >   
                        <option > QUICK </option >   
                        <option > MAC DONALD </option >   
                        <option > PIZZA HUB </option >  
                        <option > SUBWAY </option >    

                                </select>
                    </div>
                    <div class="">
                      Menu a commander:<select  value="menu">
                        <option >  burger </option > 
                        <option >  pizza</option >   
                        <option > porc roti </option >   
                        <option >salade </option >   
                        <option > Riz senegalais </option >  
                        

                                </select>
                    </div>
                    <div class="">
                      Nombre de Commande:
                      <select class="quantite" name="nbre">
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="tree">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                      </select>
                    </div>
                    <div class="">
                      Montant de la Commande: <input type="text" name="montant" >
                    </div>
                    <button type="submit" name="submit">Enregitrer</button>
                  </form>
                </section>

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
  </body>
</html>
