
    CREATE TABLE IF NOT EXISTS clients (
    id_clients int NOT NULL AUTO_INCREMENT,
  nom varchar(60) NOT NULL,
    `adresse` varchar(60) NOT NULL,
    `telephone` int NOT NULL,
    PRIMARY KEY (`id_clients`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `commandes` (
      `id_commandes` int NOT NULL AUTO_INCREMENT,
      `id_menu` int NOT NULL,
      `id_restaurants` int NOT NULL,
      `id_quantite` int NOT NULL ,
      PRIMARY KEY(`id_commandes`)
      
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `ingredients` (
    `id_ingredients` int NOT NULL AUTO_INCREMENT,
    `nom` varchar(60) NOT NULL,
    PRIMARY KEY (`id_ingredients`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `meilleurs_restaurants` (
    `id_restaurants` int NOT NULL,
    `id_menu` int NOT NULL,
    PRIMARY KEY (`id_restaurants`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `menu` (
    `id_menu` int NOT NULL AUTO_INCREMENT,
    `nom` varchar(30) NOT NULL,
    `id_ingredients` int NOT NULL,
    PRIMARY KEY (`id_menu`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `menu_ingredients` (
    `menu_ingredients` int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`menu_ingredients`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    CREATE TABLE IF NOT EXISTS `restaurants` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nom` varchar(60) NOT NULL,
  `adresse` varchar(60) NOT NULL,
    `nbre_etoile` int NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
