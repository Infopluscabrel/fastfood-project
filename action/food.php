
<?php
    //Connexion à la base de données
    function connection() {
      try{
        $host = "host:localhost;";
        $base = "fastfood";
        $user = "root";
        $mdp = "";
    
        $db = new PDO('mysql:'.$host.'dbname='.$base.';charset=UTF8;', ''.$user.'', ''.$mdp.'');
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        return $db ;
        }catch(Exception $e){
            echo "Aie, erreur : $e->getMessage";
        }
    
        //Création si nécessaire de notre base de donnée
    
      if ($db->exec('CREATE DATABASE IF NOT EXISTS fastfood')) {
        // $db_create->query(file_get_contents('data.sql'));
        // $db->exec($db_create);
      }
    }

     

      function adduser() {

       $con =  connection() ;

       

      }

      
    
    ?>
