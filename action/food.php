
<?php
    //Connexion à la base de données
    try{
    $host = "host:localhost;";
    $base = "fastfood";
    $user = "root";
    $mdp = "";

    $db = new PDO('mysql:'.$host.''.$base.';charset=UTF8;', ''.$user.'', ''.$mdp.'');
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion à la base de donnée réussie";
    }catch(Exception $e){
        echo "Aie, erreur : $e->getMessage";
    }

    //Création si nécessaire de notre base de donnée

  if ($db->exec('CREATE DATABASE IF NOT EXISTS fastfood')) {
    // $db_create->query(file_get_contents('data.sql'));
    // $db->exec($db_create);
  }
    //Sinon on continue
    ?>
