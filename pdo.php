<?php 

// Création et test de la connexion
$dsn = 'mysql:host=localhost;dbname=activité;port=3306;charset=utf8';


try {

   $pdo = new PDO($dsn, 'root' , '');

    }
     catch (PDOException $exception) {

 mail('balbunho@gmail.com', 'PDOException', $exception->getMessage());
    exit('Erreur de connexion à la base de données');

  }
  

?>
